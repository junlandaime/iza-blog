<div class="bg-white p-4 rounded-lg shadow mb-4">
    <div class="flex justify-between items-center mb-2">
        <div class="font-semibold">{{ $comment->user->name }}</div>
        <div class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</div>
    </div>
    <p class="text-gray-700">{{ $comment->content }}</p>
    @can('delete', $comment)
        <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="mt-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
        </form>
    @endcan
</div>
