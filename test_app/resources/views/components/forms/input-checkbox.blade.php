@props(['items' => [], 'item', 'checked' => false, 'name' => ''])

<div>
    <input 
        type="checkbox" 
        name="{{ $name }}"
        value="{{ $item->id }}" 
        id="item-{{ $item->id }}"
        {{ $checked ? 'checked' : '' }}
    >
    <label for="item-{{ $item->id }}">{{ $item->name }}</label>
</div>