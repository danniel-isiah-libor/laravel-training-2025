<x-layout title="Dashboard">
    <div class="min-h-screen bg-gray-50 p-8">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('admin.users.profile', ['id' => 'all']) }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600">Users</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('admin.posts.index') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600">Posts</a>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <h1 class="text-4xl font-extrabold mb-6 text-gray-800">Welcome to the Dashboard</h1>
        <p class="text-lg text-gray-700">This is a blank dashboard page. Use the breadcrumb navigation above to move between pages.</p>
    </div>
</x-layout>