@props(['label', 'type' => 'button', 'id' => null, 'route' => null])

@if ($route)
    <a href="{{ $id ? route($route, $id) : route($route) }}"
        class="w-full bg-gray-700 text-gray-200 py-2 px-4 rounded hover:bg-gray-700/60 hover:cursor-pointer transition duration-200 inline-block text-center">
        {{ $label ?? 'Button' }}
    </a>
@else
    <button type="{{ $type }}"
        class="w-full bg-gray-700 text-gray-200 py-2 px-4 rounded hover:bg-gray-700/60 hover:cursor-pointer transition duration-200">
        {{ $label ?? 'Button' }}
    </button>
@endif
