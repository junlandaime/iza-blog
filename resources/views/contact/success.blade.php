@extends('layouts.app')

@section('title', 'Message Sent')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Thank You!</h1>
            <p class="text-xl mb-8">Your message has been sent successfully. We'll get back to you as soon as possible.</p>
            <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Return to Home
            </a>
        </div>
    </div>
@endsection
