@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
        <div class="text-gray-600 mb-4">
            {{ $post->created_at->format('F j, Y') }} | By {{ $post->user->name }} | In {{ $post->category->name }}
        </div>

        @if ($post->image)
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded-lg mb-8">
        @endif

        <div class="prose max-w-none mb-8">
            {!! $post->content !!}
        </div>

        <div class="mb-8">
            <h3 class="text-2xl font-semibold mb-4">Comments</h3>
            @include('comments.list', ['comments' => $post->comments])
            @include('comments.form', ['post' => $post])
        </div>

        <div>
            <h3 class="text-2xl font-semibold mb-4">Related Posts</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($relatedPosts as $relatedPost)
                    <x-blog-post :post="$relatedPost" />
                @endforeach
            </div>
        </div>
    </article>
@endsection
