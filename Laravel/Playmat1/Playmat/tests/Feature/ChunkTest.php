<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Comment;
use App\Models\Post;

class ChunkTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_chunkByIdメソッドのクロージャ内でメソッドを呼び出せるか()
    {
        $test_arr = [];
        $time_start = microtime(true);
        \Log::alert("first:".memory_get_usage() / (1024 * 1024)."MB\n");
        $post = Comment::chunkById(100, function($posts){
            foreach($posts as $post){
                $test_arr[] = $this->to_process($post);
                if($post->post_id) $b = 'aaaa';
                $this->exec_query($post);
            }
        }, $columns = 'id');

        $time = microtime(true) - $time_start;
        \Log::alert("now:".memory_get_usage() / (1024 * 1024)."MB\n");
        \Log::alert($time."秒");

        \Log::alert("first:".memory_get_usage() / (1024 * 1024)."MB\n");
        $post = Comment::chunk(100, function($posts){
            foreach($posts as $post){
                $test_arr[] = $this->to_process($post);
                if($post->post_id) $b = 'aaaa';
                $this->exec_query($post);
            }
        });

        $time = microtime(true) - $time_start;
        \Log::alert("now:".memory_get_usage() / (1024 * 1024)."MB\n");
        \Log::alert($time."秒");

        

        assertGreaterThan(1000, count($test_arr));
    }

    private function to_process($post){
        return $post->post_id;
    }

    private function exec_query($post){
        Post::where('id',$post->post_id)->get();
    }
}
