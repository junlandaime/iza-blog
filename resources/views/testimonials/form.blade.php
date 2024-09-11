<form action="{{ route('testimonials.store') }}" method="POST" class="max-w-lg">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Your Name</label>
        <input type="text" name="name" id="name"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required>
    </div>
    <div class="mb-4">
        <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Your Testimonial</label>
        <textarea name="content" id="content" rows="4"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required></textarea>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Rating</label>
        <div class="flex items-center">
            @for ($i = 1; $i <= 5; $i++)
                <input type="radio" name="rating" id="rating-{{ $i }}" value="{{ $i }}"
                    class="mr-1" required>
                <label for="rating-{{ $i }}" class="mr-2">{{ $i }}</label>
            @endfor
        </div>
    </div>
    <div>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Submit Testimonial
        </button>
    </div>
</form>

<div class="mt-16 bg-white rounded-lg shadow-lg p-8 lg:px-64">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Share Your Experience</h2>
    <p class="text-gray-600 mb-6">Have we worked together? I'd love to hear about your experience!</p>
    <form x-data="{ name: '', position: '', company: '', testimonial: '', rating: 5 }" @submit.prevent="alert('Thank you for your testimonial!')">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" x-model="name" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="testimonial" class="block text-gray-700 text-sm font-bold mb-2">Your Testimonial</label>
            <textarea id="testimonial" x-model="testimonial" rows="4" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">Rating</label>
            <div class="flex items-center">
                <template x-for="i in 5" :key="i">
                    <button type="button" @click="rating = i" class="focus:outline-none">
                        <svg class="w-8 h-8 fill-current" :class="i <= rating ? 'text-yellow-500' : 'text-gray-400'"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>
                </template>
            </div>
        </div>
        <button type="submit"
            class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
            Submit Testimonial
        </button>
    </form>
</div>
