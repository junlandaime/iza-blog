<form action="{{ route('blog.search') }}" method="GET" class="flex items-center">
    <input type="text" name="query" placeholder="Search blog posts..." value="{{ request('query') }}"
        class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-indigo-500 focus:border-indigo-500">
    <button type="submit"
        class="px-4 py-2 bg-indigo-600 text-white rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Search
    </button>
</form>
