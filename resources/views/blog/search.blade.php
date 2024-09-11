@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Search Results for "{{ $query }}"</h1>

        <div class="mb-8">
            <x-search />
        </div>

        @if ($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($posts as $post)
                    <x-blog-post :post="$post" />
                @endforeach
            </div>
            <div class="mt-8">
                {{ $posts->appends(['query' => $query])->links() }}
            </div>
        @else
            <p class="text-gray-600">No posts found matching your search criteria.</p>
        @endif
    </div>
@endsection
