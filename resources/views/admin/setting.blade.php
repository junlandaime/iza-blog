@extends('layouts.admin')

@section('title', 'Admin Setting Website')

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">Application Settings</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('admin.settings.update') }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">General Settings</h2>
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="app_name" class="block text-sm font-medium text-gray-700">Application Name</label>
                        <input type="text" name="app_name" id="app_name" value="{{ config('app.name') }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="admin_email" class="block text-sm font-medium text-gray-700">Admin Email</label>
                        <input type="email" name="admin_email" id="admin_email" value="{{ config('taaruf.admin_email') }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Matching Settings</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="min_age" class="block text-sm font-medium text-gray-700">Minimum Age</label>
                        <input type="number" name="min_age" id="min_age" value="{{ config('taaruf.min_age') }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="max_age" class="block text-sm font-medium text-gray-700">Maximum Age</label>
                        <input type="number" name="max_age" id="max_age" value="{{ config('taaruf.max_age') }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="max_match_requests" class="block text-sm font-medium text-gray-700">Max Match Requests
                            Per User</label>
                        <input type="number" name="max_match_requests" id="max_match_requests"
                            value="{{ config('taaruf.max_match_requests') }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="match_expiry_days" class="block text-sm font-medium text-gray-700">Match Request Expiry
                            (Days)</label>
                        <input type="number" name="match_expiry_days" id="match_expiry_days"
                            value="{{ config('taaruf.match_expiry_days') }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Profile Settings</h2>
                <div class="grid grid-cols-1 gap-6">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="profile_approval_required" name="profile_approval_required" type="checkbox"
                                {{ config('taaruf.profile_approval_required') ? 'checked' : '' }}
                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="profile_approval_required" class="font-medium text-gray-700">Require Profile
                                Approval</label>
                            <p class="text-gray-500">If checked, new profiles will require admin approval before becoming
                                visible.</p>
                        </div>
                    </div>
                    <div>
                        <label for="max_profile_photos" class="block text-sm font-medium text-gray-700">Maximum Profile
                            Photos</label>
                        <input type="number" name="max_profile_photos" id="max_profile_photos"
                            value="{{ config('taaruf.max_profile_photos') }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Communication Settings</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="max_daily_messages" class="block text-sm font-medium text-gray-700">Max Daily Messages
                            Per User</label>
                        <input type="number" name="max_daily_messages" id="max_daily_messages"
                            value="{{ config('taaruf.max_daily_messages') }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="enable_real_time_chat" name="enable_real_time_chat" type="checkbox"
                                {{ config('taaruf.enable_real_time_chat') ? 'checked' : '' }}
                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="enable_real_time_chat" class="font-medium text-gray-700">Enable Real-time
                                Chat</label>
                            <p class="text-gray-500">If checked, users can chat in real-time.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end">
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Save Settings
                </button>
            </div>
        </form>
    </div>
@endsection
