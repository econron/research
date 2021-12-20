<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommandTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_コマンド1つを実行した結果が正しいかどうか()
    {
        $this->artisan("insert:somany")->assertSuccessful();
    }
}
