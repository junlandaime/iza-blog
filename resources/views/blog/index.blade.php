@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    <div class="container mx-auto px-4 py-8 lg:px-40">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-8" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="index.html" class="text-gray-500 hover:text-gray-700">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <a href="#" class="text-gray-500 hover:text-gray-700" aria-current="page">Blog</a>
                </li>
            </ol>
        </nav>

        <!-- Blog Header -->
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Iza Azizah's Blog</h1>
            <p class="text-xl text-gray-600">Stories That Inspire, Empower, and Connect</p>
        </header>

        <!-- Search and Category Filter -->
        <div class="mb-8" x-data="{ search: '', category: 'all' }">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <input type="text" x-model="search" placeholder="Search blog posts..."
                    class="w-full md:w-1/2 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600 mb-4 md:mb-0">
                <select x-model="category"
                    class="w-full md:w-auto px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600">
                    <option value="all">All Categories</option>
                    <option value="personal-growth">Personal Growth</option>
                    <option value="lifestyle">Lifestyle</option>
                    <option value="travel">Travel</option>
                    <option value="creativity">Creativity</option>
                </select>
            </div>
        </div>

        <div class="mb-8">
            <x-search />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <x-blog-post :post="$post" />
            @empty
                <p class="text-gray-600">No posts found.</p>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>

@endsection
