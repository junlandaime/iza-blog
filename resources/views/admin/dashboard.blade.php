@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Admin Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Posts</h2>
                <p class="text-3xl font-bold">{{ $totalPosts }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Users</h2>
                <p class="text-3xl font-bold">{{ $totalUsers }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Comments</h2>
                <p class="text-3xl font-bold">{{ $totalComments }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Categories</h2>
                <p class="text-3xl font-bold">{{ $totalCategories }}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-bold mb-4">Recent Posts</h2>
                <div class="bg-white rounded-lg shadow-md">
                    <ul class="divide-y divide-gray-200">
                        @foreach ($recentPosts as $post)
                            <li class="p-4 hover:bg-gray-50">
                                <a href="{{ route('admin.posts.edit', $post) }}"
                                    class="text-blue-600 hover:text-blue-800 font-semibold">{{ $post->title }}</a>
                                <p class="text-sm text-gray-600">{{ $post->created_at->format('M d, Y') }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-4">Recent Comments</h2>
                <div class="bg-white rounded-lg shadow-md">
                    <ul class="divide-y divide-gray-200">
                        @foreach ($recentComments as $comment)
                            <li class="p-4 hover:bg-gray-50">
                                <p class="text-sm text-gray-600">{{ $comment->user->name }} on <a
                                        href="{{ route('admin.posts.edit', $comment->post) }}"
                                        class="text-blue-600 hover:text-blue-800">{{ $comment->post->title }}</a></p>
                                <p class="text-gray-800">{{ Str::limit($comment->content, 100) }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
