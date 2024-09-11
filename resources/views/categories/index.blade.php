@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Categories</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($categories as $category)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2">
                            <a href="{{ route('categories.show', $category->slug) }}"
                                class="text-gray-900 hover:text-indigo-600">
                                {{ $category->name }}
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-4">{{ $category->description }}</p>
                        <p class="text-sm text-gray-500">{{ $category->posts_count }} posts</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
