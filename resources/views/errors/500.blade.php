@extends('layouts.app')

@section('title', '500 Server Error')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="py-4 px-6 bg-red-600 text-white text-center">
                <h1 class="text-4xl font-bold">500</h1>
                <p class="text-xl">Server Error</p>
            </div>
            <div class="py-8 px-6">
                <p class="text-gray-700 text-center mb-6">Oops! Something went wrong on our end. We're working to fix it.</p>
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
