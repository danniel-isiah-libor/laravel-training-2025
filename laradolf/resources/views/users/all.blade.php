<x-layout title="All Users">
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
            </ol>
        </nav>

        <!-- Main Content -->
        <h1 class="text-4xl font-extrabold mb-6 text-gray-800">All Users</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">User Group</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">{{ $user->id }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">{{ $user->name }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">{{ $user->email }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">
                                <span class="px-2 py-1 rounded-full text-white {{ $user->user_group_id == 1 ? 'bg-blue-500' : 'bg-green-500' }}">
                                    {{ $user->user_group_id == 1 ? 'Administrator' : 'Client' }}
                                </span>
                            </td>
                            
                            <!-- Combined Action Column -->
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700 space-y-1">
                                <!-- View Posts Link -->
                                <a href="{{ url('/admin/posts/' . $user->id) }}" class="text-blue-500 hover:underline block">
                                    View Posts
                                </a>

                                <!-- Delete Form -->
                                @if(session('user')->id !== $user->id || $user->user_group_id !== 1)
                                    <form method="POST" action="{{ route('admin.users.delete', $user->id) }}" onsubmit="return confirm('Are you sure you want to delete this user: {{ $user->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline block">Delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-layout>
