@props([
    'action' => null,
    'method' => 'POST',
    'label' => null,
    'data' => null,
])

<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    @method($method)

    <x-forms.input-field name="title" label="Title" value="{{ $data?->title }}"/>

    <br>

    <textarea name="body" cols="30" rows="10" class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">{{ $data?->body }}</textarea>

    <br>

    <x-forms.button label="{{ $label }}"/>
</form>
