<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_データベースのアサーションを試す()
    {
        $this->assertDatabaseCount('posts', 1000);
        $this->assertDatabaseHas('comments', [
            "post_id" => 1000
        ]);
        $this->assertDatabaseMissing('comments', [
            "post_id" => 2000
        ]);


    }
    
}
