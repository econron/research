<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition()
    {
        return [
            "content" => mt_rand(5, 15)
        ];
    }
}
