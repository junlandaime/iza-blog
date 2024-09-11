@extends('layouts.admin')

@section('title', 'View Comment')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">View Comment</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Comment Details</h2>
                <p><strong>Author:</strong> {{ $comment->user->name }}</p>
                <p><strong>Email:</strong> {{ $comment->user->email }}</p>
                <p><strong>Date:</strong> {{ $comment->created_at->format('F j, Y H:i') }}</p>
                <p><strong>Status:</strong>
                    @if ($comment->is_approved)
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Approved
                        </span>
                    @else
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Pending
                        </span>
                    @endif
                </p>
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Comment Content</h3>
                <p class="text-gray-700">{{ $comment->content }}</p>
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Associated Post</h3>
                <p><strong>Title:</strong> <a href="{{ route('blog.show', $comment->post->slug) }}"
                        class="text-indigo-600 hover:text-indigo-900">{{ $comment->post->title }}</a></p>
            </div>

            <div class="flex space-x-4">
                @if (!$comment->is_approved)
                    <form action="{{ route('admin.comments.approve', $comment) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Approve Comment
                        </button>
                    </form>
                @endif
                <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        onclick="return confirm('Are you sure you want to delete this comment?')">
                        Delete Comment
                    </button>
                </form>
                <a href="{{ route('admin.comments.index') }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Back to Comments
                </a>
            </div>
        </div>
    </div>
@endsection
