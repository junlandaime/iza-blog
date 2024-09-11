<div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
    @if ($post->image)
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
    @endif
    <div class="p-6">
        <h3 class="font-bold text-xl mb-2"><a href="{{ route('blog.show', $post->slug) }}"
                class="text-gray-900 hover:text-indigo-600">
                {{ $post->title }}
            </a></h3>
        <p class="text-gray-600">{{ $post->excerpt }}</p>
    </div>
</div>
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="https://picsum.photos/seed/blog1/600/400" alt="Blog Post 1" class="w-full h-64 object-cover">
    <div class="p-6">
        <h3 class="font-bold text-xl mb-2">Embracing Change: A Journey of Self-Discovery</h3>
        <p class="text-gray-600 mb-4">Explore the transformative power of embracing life's changes and how it leads to
            personal growth.</p>
        <a href="#"
            class="inline-block bg-purple-500 text-white font-bold py-2 px-4 rounded hover:bg-purple-600 transition duration-300">Read
            More</a>
    </div>
</div>
