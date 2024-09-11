@extends('layouts.app')

@section('title', 'Welcome to Iza Blog')

@push('styles')
    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .float {
            animation: float 6s ease-in-out infinite;
        }
    </style>
@endpush


@section('content')
    <div class="container mx-auto px-4 py-8 lg:px-40">
        <!-- Hero Section -->
        <section class="text-center mb-16">
            <div class="relative inline-block">
                <img src="https://picsum.photos/seed/iza/300/300" alt="Iza Azizah"
                    class="rounded-full w-48 h-48 mx-auto mb-8 border-4 border-white shadow-lg float">
                <div
                    class="absolute -top-4 -right-4 bg-yellow-400 rounded-full w-12 h-12 flex items-center justify-center transform rotate-12">
                    <span class="text-2xl">✨</span>
                </div>
            </div>
            <h1 class="text-4xl font-bold mb-2 text-gray-800">Welcome to Iza Azizah's World</h1>
            <h2 class="text-2xl mb-8 text-gray-600">Blogger | Achiever | Storyteller</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8">Embark on a journey through my thoughts, achievements,
                and stories. Let's explore life's wonders together!</p>
            <a href="#about"
                class="bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold py-3 px-6 rounded-full hover:from-purple-600 hover:to-pink-600 transition duration-300 transform hover:scale-105">Discover
                My Story</a>
        </section>

        <!-- About Section -->
        <section id="about" class="mb-16">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">About Me</h2>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:w-48" src="https://picsum.photos/seed/about/400/400"
                            alt="About Iza">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">A Glimpse Into My World
                        </div>
                        <p class="mt-2 text-gray-600">Hi, I'm Iza Azizah. I'm passionate about sharing my life experiences
                            and achievements through my blog. With a background in [your field], I strive to inspire others
                            through my writing and accomplishments.</p>
                        <div class="mt-4">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Blogging</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Inspiration</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#LifeStories</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($featuredPosts as $post)
                <x-blog-post :post="$post" />
            @endforeach
        </div>

        <div class="mt-12">
            <h2 class="text-2xl font-semibold mb-4">Recent Posts</h2>
            <div class="space-y-6">
                @foreach ($recentPosts as $post)
                    <x-feat-blog-post :post="$post" />
                @endforeach
            </div>
        </div>

        <div class="mt-12">
            <h2 class="text-2xl font-semibold mb-4">Testimonials</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($testimonials as $testimonial)
                    <x-testimonial :testimonial="$testimonial" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
