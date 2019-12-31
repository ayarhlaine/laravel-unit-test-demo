<?php

namespace Tests\Unit\Author;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
class AuthorDeleteTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function can_delete_author_data()
    {
        $author = factory('App\Author')->create();
        $response = $this->delete('/authors/'.$author->id);
        $this->assertSoftDeleted('authors',[
            'id' => $author->id
        ]);
        $response->assertSessionHas('delete-success', 'User Deleted');
        $response->assertRedirect('/authors');
    }

    /** @test */
    public function delete_fail_with_nodata_id()
    {
        $fake_id = 9999;
        $response = $this->delete('/authors/'.$fake_id);
        $response->assertSessionHas('delete-fail', 'Fail User Delete');
    }
    
    
}
