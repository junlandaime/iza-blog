@extends('layouts.admin')

@section('title', $post->title)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
            <div>
                <a href="{{ route('admin.posts.edit', $post) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Edit Post
                </a>
                <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    View on Site
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">Post Details</h2>
                    <p><strong>Slug:</strong> {{ $post->slug }}</p>
                    <p><strong>Author:</strong> {{ $post->user->name }}</p>
                    <p><strong>Category:</strong> {{ $post->category->name }}</p>
                    <p><strong>Status:</strong>
                        @if ($post->status === 'published')
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                        @else
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Draft</span>
                        @endif
                    </p>
                    <p><strong>Featured:</strong> {{ $post->is_featured ? 'Yes' : 'No' }}</p>
                    <p><strong>Created at:</strong> {{ $post->created_at->format('F j, Y H:i') }}</p>
                    <p><strong>Last updated:</strong> {{ $post->updated_at->format('F j, Y H:i') }}</p>
                </div>

                @if ($post->image)
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold mb-2">Featured Image</h2>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                            class="w-full max-w-md h-auto">
                    </div>
                @endif

                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">Excerpt</h2>
                    <p class="text-gray-700">{{ $post->excerpt }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">Content</h2>
                    <div class="prose max-w-none">
                        {!! $post->content !!}
                    </div>
                </div>

                @if ($post->tags->count() > 0)
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold mb-2">Tags</h2>
                        <div class="flex flex-wrap">
                            @foreach ($post->tags as $tag)
                                <span
                                    class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="mt-8">
                    <h2 class="text-xl font-semibold mb-2">Comments ({{ $post->comments->count() }})</h2>
                    @if ($post->comments->count() > 0)
                        <div class="space-y-4">
                            @foreach ($post->comments as $comment)
                                <div class="bg-gray-100 p-4 rounded-lg">
                                    <p class="font-semibold">{{ $comment->user->name }} <span
                                            class="text-gray-600 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                                    </p>
                                    <p class="mt-2">{{ $comment->content }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-600">No comments yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
