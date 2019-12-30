<?php

namespace Tests\Unit\Author;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Author;
class AuthorList extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function can_call_index_page_route()
    {
        $response = $this->get('/authors');
        $response->assertStatus(200);
    }
    /** @test */
    public function can_return_view_author_index()
    {
        $response = $this->get('/authors');
        $response->assertViewIs('author.index');
    }

    /** @test */
    public function user_can_see_all_authors()
    {
        $author = factory('App\Author')->create();
        $response = $this->get('/authors');
        $response->assertSee($author->name);
    }

    /** @test */
    public function author_list_get_all_data_from_db()
    {
        $response = $this->get('/authors');
        $response->assertViewHasAll([
            'authors' => Author::all()
        ]); 
    }
    
    
    
    
}
