<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    /** @test */
    public function can_go_home_page_properly()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function can_about_page_return_about_view()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertViewIs('about');
    }
    
    
   
}
