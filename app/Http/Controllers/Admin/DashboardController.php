<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $totalUsers = User::count();
        $totalCategories = Category::count();
        $totalComments = Comment::count();
        $recentPosts = Post::latest()->take(5)->get();
        $recentComments = Comment::with('post')->latest()->take(5)->get();

        return view('admin.dashboard', compact('totalPosts', 'totalUsers', 'totalComments', 'recentPosts', 'recentComments', 'totalCategories'));
    }
}
