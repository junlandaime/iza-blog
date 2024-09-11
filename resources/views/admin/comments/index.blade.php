@extends('layouts.admin')

@section('title', 'Manage Comments')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Manage Comments</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Post</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($comments as $comment)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $comment->user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('blog.show', $comment->post->slug) }}"
                                    class="text-indigo-600 hover:text-indigo-900">
                                    {{ Str::limit($comment->post->title, 30) }}
                                </a>
                            </td>
                            <td class="px-6 py-4">{{ Str::limit($comment->content, 50) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($comment->is_approved)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Approved
                                    </span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Pending
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('admin.comments.show', $comment) }}"
                                    class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
                                @if (!$comment->is_approved)
                                    <form action="{{ route('admin.comments.approve', $comment) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="text-green-600 hover:text-green-900 mr-3">Approve</button>
                                    </form>
                                @endif
                                <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $comments->links() }}
        </div>
    </div>
@endsection
