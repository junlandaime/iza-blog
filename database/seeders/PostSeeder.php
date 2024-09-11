<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $categories = Category::all();

        // Create 50 posts
        Post::factory()->count(50)->make()->each(function ($post) use ($users, $categories) {
            $post->user_id = $users->random()->id;
            $post->category_id = $categories->random()->id;
            $post->save();
        });

        // Create 5 featured posts
        Post::factory()->count(5)->featured()->make()->each(function ($post) use ($users, $categories) {
            $post->user_id = $users->random()->id;
            $post->category_id = $categories->random()->id;
            $post->save();
        });
    }
}
