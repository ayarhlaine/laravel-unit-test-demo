<?php

namespace Tests\Unit\Author;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorCreateTest extends TestCase
{
    /** @test */
    public function can_call_author_crate_route()
    {
        $response = $this->get('authors/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function return_author_create_view()
    {
        $response = $this->get('authors/create');
        $response->assertViewIs('author.create');
    }
    
    
}
