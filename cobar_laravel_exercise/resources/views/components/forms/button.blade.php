@props(['label', 'type' => 'button'])

<button type="{{ $type }}"
    class="mt-4 w-full bg-gray-700 text-gray-200 py-2 px-4 rounded hover:bg-gray-700/60 hover:cursor-pointer transition duration-200">
    {{ $label ?? 'Button' }}
</button>
