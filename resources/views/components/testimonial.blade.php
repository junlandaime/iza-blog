<div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
    <div class="p-6">
        <div class="flex items-center mb-4">
            <img :src="testimonial.image" :alt="testimonial.name" class="w-12 h-12 rounded-full mr-4">
            <div>
                <h3 class="font-bold text-lg text-gray-800">{{ $testimonial->name }}</h3>
                <p class="text-sm text-gray-600">
                    {{-- <span x-text="testimonial.position"></span> at <span x-text="testimonial.company"></span> --}}
                </p>
            </div>
        </div>
        <p class="text-gray-600 mb-4">{{ $testimonial->content }}</p>
        <div class="flex items-center">
            {{-- <template x-for="i in 5" :key="i"> --}}

            @for ($i = 1; $i <= 5; $i++)
                @if ($i <= $testimonial->rating)
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                @else
                    <svg class="w-5 h-5 fill-current text-gray-400" viewBox="0 0 24 24">
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                @endif
            @endfor
            {{-- </template> --}}
        </div>
    </div>
</div>
