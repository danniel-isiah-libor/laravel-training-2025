@props([
    'label' => null,
    'name' => null,
    'type' => 'text',
    'value' => null,
])

<div>
    <label for="{{ $name }}" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">{{ $label }}</label>
    <div>
        <input id="{{ $name }}" value="{{ old($name, $value) }}" type="{{ $type }}" name="{{ $name }}" required autocomplete="{{ $name }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
    </div>
    @error($name)
        <div class="text-sm text-red-600 dark:text-red-400">
            {{ $message }}
        </div>
    @enderror
</div>

