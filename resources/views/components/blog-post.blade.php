{{-- <article class="bg-white shadow-md rounded-lg overflow-hidden"> --}}
{{-- @if ($post->image)
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
    @endif
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-2">
            <a href="{{ route('blog.show', $post->slug) }}" class="text-gray-900 hover:text-indigo-600">
                {{ $post->title }}
            </a>
        </h2>
        <p class="text-gray-600 text-sm mb-4">
            {{ $post->created_at->format('F j, Y') }} | By {{ $post->user->name }} | In {{ $post->category->name }}
        </p>
        <p class="text-gray-700 mb-4">{{ $post->excerpt }}</p>
        <a href="{{ route('blog.show', $post->slug) }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
            Read More
        </a>
    </div> --}}

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
{{-- </article> --}}
