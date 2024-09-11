@extends('layouts.admin')

@section('title', 'Edit Testimonial')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Edit Testimonial</h1>

        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" class="max-w-lg">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                    value="{{ old('name', $testimonial->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
                <textarea name="content" id="content" rows="4"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('content') border-red-500 @enderror"
                    required>{{ old('content', $testimonial->content) }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="rating" class="block text-gray-700 text-sm font-bold mb-2">Rating</label>
                <select name="rating" id="rating"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('rating') border-red-500 @enderror"
                    required>
                    <option value="">Select Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}"
                            {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                @error('rating')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Testimonial
                </button>
            </div>
        </form>
    </div>
@endsection
