@props([
    'type'=>'submit',
    'text'=>'primary'
])
<div>
    <button type="{{ $type }}" class="mt-2 flex w-full justify-center rounded-md bg-red-300 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-pink-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">{{ $text }}</button>
</div>
