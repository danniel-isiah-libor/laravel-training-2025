<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'User App' }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen">
    <header class="bg-green-600 text-black p-4 mb-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">User Management</h1>
        @if(session('user'))
            <div>
                <span class="mr-4">Logged in as: {{ session('user')->name }}</span>
                <a href="{{ route('admin.logout') }}" class="text-red-500 hover:underline">Logout</a>
            </div>
        @endif
    </header>
    <main class="container mx-auto p-4 bg-white rounded shadow">
        {{ $slot }}
    </main>
    <footer class="text-center text-xs text-gray-500 mt-8">
        <hr class="my-4">
        <small>&copy; 2025 User App</small>
    </footer>
</body>
</html>
