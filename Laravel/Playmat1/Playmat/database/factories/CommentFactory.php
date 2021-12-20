<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

class CommentFactory extends Factory
{
    
    protected $model = Comment::class;

    public function definition()
    {
        return [
            "honbun" => mt_rand(4,10),
            "del_flg" => 0
        ];
    }
}
