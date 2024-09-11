@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-2">{{ $category->name }}</h1>
        <p class="text-gray-600 mb-8">{{ $category->description }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <x-blog-post :post="$post" />
            @empty
                <p class="text-gray-600">No posts found in this category.</p>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
