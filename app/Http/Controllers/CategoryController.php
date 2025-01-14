<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('posts')->get();
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $posts = $category->posts()->with('user')->latest()->paginate(10);
        return view('categories.show', compact('category', 'posts'));
    }
}
