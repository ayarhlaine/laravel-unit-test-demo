<?php

namespace Tests\Unit\Author;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
class AuthorShowTest extends TestCase
{
    use DatabaseMigrations;
   /** @test */
   public function can_view_author_detail()
   {
      $author = factory('App\Author')->create();
      $response = $this->get('/authors/'.$author->id);
      $response->assertSee($author->name)
               ->assertSee($author->address);
   }

   /** @test */
   public function author_show_route_return_author_show_view()
   {
        $author = factory('App\Author')->create();
        $response = $this->get('/authors/'.$author->id);
        $response->assertViewIs('author.show');
   }

   /** @test */
   public function author_show_view_has_author_data()
   {
        $author = factory('App\Author')->create();
        $response = $this->get('/authors/'.$author->id);
        $response->assertViewHas('author',$author);
   }
   
   

   /** @test */
   public function will_show_404_when_author_not_found()
   {
        $fake_id = 9999;
        $response = $this->get('/authors/'.$fake_id);
        $response->assertStatus(404);
   }
   
   
}
