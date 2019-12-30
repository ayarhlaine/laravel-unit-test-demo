<?php

namespace Tests\Unit\Author;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Author;
class AuthorSaveTest extends TestCase
{
    use DatabaseMigrations;
   /** @test */
   public function can_save_author_data()
   {
       $this->withoutExceptionHandling();
       $response = $this->post('/authors',[
        'name' => 'Ah',
        'address' => 'Address'
       ]);
       $this->assertCount(1,Author::all());
       $response->assertStatus(302);
   }

   /** @test */
   public function author_name_is_required()
   {
        $response = $this->post('/authors',[
        'name' => '',
        'address' => 'Address'
        ]);
        $response->assertSessionHasErrors('name');
   }
   
   
}
