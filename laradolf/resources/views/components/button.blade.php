<button {{ $attributes->merge([
    'class' => 'w-full bg-green-600 text-white font-bold py-2 px-4 rounded hover:bg-green-700 transition']) }}>
    {{ $slot }}
</button>
