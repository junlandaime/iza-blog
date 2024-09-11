@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <div class="bg-gradient-to-br from-purple-100 to-indigo-100 min-h-screen font-sans container mx-auto px-4 py-8 lg:px-40">
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
                    <span class="text-gray-500" aria-current="page">Contact</span>
                </li>
            </ol>
        </nav>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="md:flex">
                <!-- Contact Information -->
                <div class="md:w-1/3 bg-purple-600 p-8 text-white">
                    <h2 class="text-3xl font-bold mb-4">Contact Information</h2>
                    <p class="mb-4">Feel free to reach out! I'd love to hear from you.</p>
                    <div class="mb-4">
                        <i class="fas fa-envelope mr-2"></i>
                        <a href="mailto:iza@example.com" class="hover:underline">iza@example.com</a>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-phone mr-2"></i>
                        <a href="tel:+1234567890" class="hover:underline">+1 (234) 567-890</a>
                    </div>
                    <div class="mb-8">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>123 Blogger Lane, Internet City, 12345</span>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white hover:text-gray-200"><i
                                class="fab fa-linkedin-in fa-lg"></i></a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="md:w-2/3 p-8">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Send Me a Message</h2>


                    <form action="{{ route('contact.submit') }}" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                            <input type="text" id="subject" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                            <textarea id="message" rows="4" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                    <!-- Success Message -->

                    @if (session('success'))
                        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Frequently Asked Questions</h2>
            <div x-data="{ activeTab: 0 }" class="space-y-4">
                <div class="border border-gray-200 rounded-lg">
                    <button @click="activeTab = activeTab === 0 ? null : 0"
                        class="flex justify-between items-center w-full p-4 focus:outline-none">
                        <span class="font-semibold text-left">How can I collaborate with you?</span>
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="activeTab === 0" class="p-4 border-t border-gray-200">
                        I'm always open to collaborations! Please send me an email with your proposal, and I'll get back to
                        you as soon as possible.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg">
                    <button @click="activeTab = activeTab === 1 ? null : 1"
                        class="flex justify-between items-center w-full p-4 focus:outline-none">
                        <span class="font-semibold text-left">Do you offer coaching or mentoring services?</span>
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="activeTab === 1" class="p-4 border-t border-gray-200">
                        Yes, I offer limited coaching and mentoring sessions. Please contact me for more information about
                        availability and rates.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg">
                    <button @click="activeTab = activeTab === 2 ? null : 2"
                        class="flex justify-between items-center w-full p-4 focus:outline-none">
                        <span class="font-semibold text-left">Can I guest post on your blog?</span>
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="activeTab === 2" class="p-4 border-t border-gray-200">
                        I occasionally accept guest posts that align with my blog's theme and values. Please send me a pitch
                        with your proposed topic and outline.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Contact Us</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                <input type="text" name="subject" id="subject"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                <textarea name="message" id="message" rows="5"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required></textarea>
            </div>
            <div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Send Message
                </button>
            </div>
        </form>
    </div>
@endsection
