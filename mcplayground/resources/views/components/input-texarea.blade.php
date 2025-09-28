@props(['name' => '', 'label' => 'Textarea', 'value' => ''])
<div class="flex flex-col gap-1 w-full">
    <div class="text-black text-[15px]">{{ $label }}</div>
    <textarea name="{{ $name }}" class="bg-neutral-100 border border-neutral-300/80 p-[8px] px-3 rounded-lg">{{ $value }}</textarea>
    @error($name)
        <div class="text-[15px] text-rose-500">
            {{ $message }}
        </div>
    @enderror
</div>
