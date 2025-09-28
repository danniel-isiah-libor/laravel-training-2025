@component('components.layout')
    @slot('title') Sign In @endslot
    <h2 class="text-xl font-bold mb-4 text-center">Sign In</h2>
    <form method="POST" action="{{ route('admin.signin') }}" class="max-w-sm mx-auto bg-white p-6 rounded-lg shadow">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required autocomplete="email">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium mb-1">Password</label>
            <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
        </div>
        <x-button type="submit">Sign In</x-button>
    </form>
    <p class="mt-4 text-center text-gray-700">
        Not yet registered? <a href="{{ route('admin.signup') }}" class="text-blue-500 hover:underline">Sign up here</a>.
    </p>
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endcomponent
