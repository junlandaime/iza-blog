<nav x-data="{ open: false }" class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{ route('admin.dashboard') }}" class="text-white font-bold text-xl">Iza Admin</a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ route('admin.dashboard') }}"
                            class="@if (request()->routeIs('admin.dashboard')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

                        <a href="{{ route('admin.posts.index') }}"
                            class="@if (request()->routeIs('admin.posts.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Posts</a>

                        <a href="{{ route('admin.categories.index') }}"
                            class="@if (request()->routeIs('admin.categories.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Categories</a>

                        <a href="{{ route('admin.comments.index') }}"
                            class="@if (request()->routeIs('admin.comments.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Comments</a>

                        <a href="{{ route('admin.users.index') }}"
                            class="@if (request()->routeIs('admin.users.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Users</a>

                        <a href="{{ route('admin.settings.index') }}"
                            class="@if (request()->routeIs('admin.settings.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Settings</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <a href="{{ route('home') }}" target="_blank"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">View
                        Site</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                    </form>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': !open }" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('admin.dashboard') }}"
                class="@if (request()->routeIs('admin.dashboard')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

            <a href="{{ route('admin.posts.index') }}"
                class="@if (request()->routeIs('admin.posts.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block px-3 py-2 rounded-md text-base font-medium">Posts</a>

            <a href="{{ route('admin.categories.index') }}"
                class="@if (request()->routeIs('admin.categories.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block px-3 py-2 rounded-md text-base font-medium">Categories</a>

            <a href="{{ route('admin.comments.index') }}"
                class="@if (request()->routeIs('admin.comments.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block px-3 py-2 rounded-md text-base font-medium">Comments</a>

            <a href="{{ route('admin.users.index') }}"
                class="@if (request()->routeIs('admin.users.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block px-3 py-2 rounded-md text-base font-medium">Users</a>

            <a href="{{ route('admin.settings.index') }}"
                class="@if (request()->routeIs('admin.settings.*')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block px-3 py-2 rounded-md text-base font-medium">Settings</a>

            <a href="{{ route('home') }}" target="_blank"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">View
                Site</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block w-full text-left px-3 py-2 rounded-md text-base font-medium">Logout</button>
            </form>
        </div>
    </div>
</nav>
