@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="py-4 px-6 bg-yellow-500 text-white text-center">
                <h1 class="text-4xl font-bold">404</h1>
                <p class="text-xl">Page Not Found</p>
            </div>
            <div class="py-8 px-6">
                <p class="text-gray-700 text-center mb-6">Oops! The page you're looking for doesn't exist.</p>
                <div class="flex justify-center">
                    <a href="{{ url('/') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                        Return to Homepage
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
