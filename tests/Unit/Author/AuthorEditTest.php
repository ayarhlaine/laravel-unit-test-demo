<?php

namespace Tests\Unit\Author;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
class AuthorEditTest extends TestCase
{
  use DatabaseMigrations;
  /** @test */
  public function user_can_see_author_data()
  {
        $author = factory('App\Author')->create();
        $response = $this->get('/authors/'.$author->id.'/edit');
        $response->assertViewIs('author.edit');
        $response->assertViewHas('author',$author);
        $response->assertSee($author->name)
               ->assertSee($author->address);
  }

  /** @test */
  public function will_show_404_when_author_not_found_in_edit()
  {
       $fake_id = 9999;
       $response = $this->get('/authors/'.$fake_id.'/edit');
       $response->assertStatus(404);
  }
  
}
