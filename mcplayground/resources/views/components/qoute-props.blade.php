@props(['data', style => 'color:white'])
<div class="absolute backdrop-blur-2xl h-80 bg-black/10 p-6 rounded-xl border border-white/5 flex items-center">
    <div style="{{ $style }}" class="text-4xl font-semibol flex flex-col gap-2">
        Smile, breathe, and go slowly.
        <span class="text-black font-medium text-lg">-
            {{ $data->name }}
        </span>
    </div>
</div>
