@extends('layouts.app')

@section('title', 'Testimonials')

@section('content')
    <div class="container mx-auto px-4 py-8 lg:px-40">
        <h1 class="text-4xl font-bold mb-8">Testimonials</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
            @foreach ($testimonials as $testimonial)
                <x-testimonial :testimonial="$testimonial" />
            @endforeach
        </div>

        <div class="mb-8">
            {{ $testimonials->links() }}
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-4">Share Your Experience</h2>
            @include('testimonials.form')
        </div>
    </div>
@endsection
