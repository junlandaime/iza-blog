<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">
            {{ $title ?? 'Iza Blog' }}
        </h1>
        {{ $slot }}
    </div>
</header>
