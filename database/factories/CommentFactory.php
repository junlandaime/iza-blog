<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'content' => $this->faker->paragraph,
            'user_id' => User::factory(),
            'post_id' => Post::factory(),
            'is_approved' => $this->faker->boolean(80),
        ];
    }

    public function approved()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_approved' => true,
            ];
        });
    }
}
