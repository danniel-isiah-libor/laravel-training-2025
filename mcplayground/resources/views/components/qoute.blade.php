<div
    class="absolute backdrop-blur-3xl h-80 bg-white/10 shadow-xl p-2 px-10 rounded-xl border border-white/5 flex items-center">
    <div class="text-4xl font-semibold text-neutral-200 flex flex-col gap-2">
        {{ $slot }}
        <div class="mt-2">Smile, breathe, and go slowly.</div>
        <span class="text-neutral-200 font-normal text-[16px]">
            - {{ $data?->name }}
        </span>
    </div>
</div>
