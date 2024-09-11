@auth
    <form action="{{ route('comments.store') }}" method="POST" class="mt-8">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Your Comment</label>
            <textarea name="content" id="content" rows="4"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>{{ old('content') }}</textarea>
        </div>
        <div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit Comment
            </button>
        </div>
    </form>
@else
    <p class="mt-8 text-gray-600">Please <a href="{{ route('login') }}" class="text-blue-500 hover:underline">log in</a> to
        leave a comment.</p>
@endauth
