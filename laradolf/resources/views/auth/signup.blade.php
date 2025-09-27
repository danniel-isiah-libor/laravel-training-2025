@component('components.layout')
    @slot('title') Sign Up @endslot
    <h2 class="text-xl font-bold mb-4 text-center">Sign Up</h2>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('admin.signup.store') }}" class="max-w-sm mx-auto bg-white p-6 rounded-lg shadow">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required autocomplete="email">
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium mb-1">Password</label>
            <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <x-button type="submit">Sign Up</x-button>
    </form>
    <p class="mt-4 text-center text-gray-700">
        Already have an account? <a href="{{ route('admin.signin') }}" class="text-blue-500 hover:underline">Sign in here</a>.
    </p>
@endcomponent
