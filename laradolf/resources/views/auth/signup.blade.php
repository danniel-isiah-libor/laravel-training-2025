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
        @foreach(['name', 'email', 'password', 'password_confirmation'] as $field)
            <div class="mb-4">
                <label for="{{ $field }}" class="block text-sm font-medium mb-1">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
                <input type="{{ in_array($field, ['password', 'password_confirmation']) ? 'password' : ($field === 'email' ? 'email' : 'text') }}" name="{{ $field }}" id="{{ $field }}" value="{{ old($field) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                @error($field)
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        @endforeach
        <x-button type="submit">Sign Up</x-button>
    </form>
    <p class="mt-4 text-center text-gray-700">
        Already have an account? <a href="{{ route('admin.signin') }}" class="text-blue-500 hover:underline">Sign in here</a>.
    </p>
@endcomponent
