@extends('layouts.app')

@section('title', 'About Iza')

@section('content')
    <div class="container mx-auto px-4 py-8 lg:px-40">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-8" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="index.html" class="text-gray-500 hover:text-gray-700">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <a href="#" class="text-gray-500 hover:text-gray-700" aria-current="page">About Me</a>
                </li>
            </ol>
        </nav>

        <!-- About Section -->
        <section class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:w-48" src="https://picsum.photos/seed/iza/400/400"
                        alt="Iza Azizah">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">About Me</div>
                    <h1 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Iza Azizah
                    </h1>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500">Passionate blogger, achiever, and storyteller on a
                        mission to inspire and connect through words.</p>
                </div>
            </div>
        </section>

        <!-- Biography -->
        <section class="bg-white rounded-lg shadow-lg overflow-hidden p-8 mb-8 fade-in">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Biography</h2>
            <p class="text-gray-600 mb-4">
                Hello! I'm Iza Azizah, a passionate writer and storyteller born and raised in [Your Birthplace]. From a
                young age, I've been captivated by the power of words to inspire, educate, and connect people across
                cultures and experiences.
            </p>
            <p class="text-gray-600 mb-4">
                My journey as a blogger began in [Year], when I started sharing my thoughts and experiences online. What
                started as a personal hobby quickly grew into a platform where I could connect with readers from all walks
                of life, sharing stories that resonated with their own experiences and challenges.
            </p>
            <p class="text-gray-600">
                Today, I'm dedicated to creating content that not only entertains but also empowers my readers to embrace
                their unique journeys, overcome obstacles, and pursue their passions with unwavering determination.
            </p>
        </section>

        <!-- Background -->
        <section class="bg-white rounded-lg shadow-lg overflow-hidden p-8 mb-8 fade-in">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Background</h2>
            <p class="text-gray-600 mb-4">
                My background in [Your Field/Industry] has greatly influenced my perspective and approach to blogging. With
                [X] years of experience in [Specific Area], I've developed a keen understanding of [Relevant Topics/Issues],
                which I often explore in my writing.
            </p>
            <p class="text-gray-600">
                Throughout my career, I've had the opportunity to [Mention Any Significant Experiences or Achievements].
                These experiences have not only shaped my professional life but have also provided rich material for my
                blog, allowing me to share unique insights and practical advice with my readers.
            </p>
        </section>

        <!-- Education -->
        <section class="bg-white rounded-lg shadow-lg overflow-hidden p-8 mb-8 fade-in">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Education</h2>
            <ul class="list-disc list-inside text-gray-600">
                <li class="mb-2">[Degree] in [Field of Study] from [University Name], [Graduation Year]</li>
                <li class="mb-2">[Any Additional Degrees or Certifications]</li>
                <li class="mb-2">[Relevant Workshops or Training Programs]</li>
            </ul>
            <p class="text-gray-600 mt-4">
                My educational background has provided me with a strong foundation in [Relevant Skills/Knowledge Areas],
                which I continually apply and expand upon in my writing and professional endeavors.
            </p>
        </section>

        <!-- Interests -->
        <section class="bg-white rounded-lg shadow-lg overflow-hidden p-8 fade-in">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Interests</h2>
            <p class="text-gray-600 mb-4">
                Beyond my professional pursuits, I'm passionate about a variety of interests that enrich my life and often
                find their way into my writing:
            </p>
            <ul class="list-disc list-inside text-gray-600">
                <li class="mb-2">[Interest 1]: [Brief description or how it influences your work]</li>
                <li class="mb-2">[Interest 2]: [Brief description or how it influences your work]</li>
                <li class="mb-2">[Interest 3]: [Brief description or how it influences your work]</li>
                <li class="mb-2">[Interest 4]: [Brief description or how it influences your work]</li>
            </ul>
            <p class="text-gray-600 mt-4">
                These diverse interests not only fuel my creativity but also allow me to connect with my readers on multiple
                levels, sharing experiences and insights that go beyond the realm of [Your Primary Focus].
            </p>
        </section>
    </div>

@endsection
