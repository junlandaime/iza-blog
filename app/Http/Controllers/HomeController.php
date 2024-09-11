<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPosts = Post::with('category')
            ->where('is_featured', true)
            ->latest()
            ->take(3)
            ->get();

        $recentPosts = Post::with('category')
            ->latest()
            ->take(5)
            ->get();

        $testimonials = Testimonial::inRandomOrder()
            ->take(3)
            ->get();

        return view('home', compact('featuredPosts', 'recentPosts', 'testimonials'));
    }

    public function about()
    {
        return view('about');
    }
}
