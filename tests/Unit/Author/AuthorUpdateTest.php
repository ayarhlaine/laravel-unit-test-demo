<?php

namespace Tests\Unit\Author;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
class AuthorUpdateTest extends TestCase
{
    use DatabaseMigrations;
   /** @test */
   public function can_update_author_data()
   {
       $author = factory('App\Author')->create();
       $author->name = 'New Name';
       $author->address = 'New Address';
       $response = $this->put('/authors/'.$author->id,$author->toArray());
       $this->assertDatabaseHas('authors',[
           'id' => $author->id,
           'name' => 'New Name',
           'address' => 'New Address',
       ]);
    
       $response->assertRedirect('/authors');

   }

   /** @test */
   public function show_404_when_wrong_author_id_update()
   {
        $fake_id = 9999;
        $response = $this->put('/authors/'.$fake_id,[]);
        $response->assertStatus(404);
   }
   
   
}
