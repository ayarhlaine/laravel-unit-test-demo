<?php

namespace Tests\Unit\Author;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorList extends TestCase
{
    /** @test */
    public function can_call_index_page_route()
    {
        $response = $this->get('/authors');
        $response->assertStatus(200);
    }
    
}
