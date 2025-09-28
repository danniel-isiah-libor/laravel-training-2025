@props([
    'action'=>null,
    'method'=>'POST',
    'data'=>null
])

<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)
   {{ $data?->title }}

    <x-labeled-input-field type="text" name="title" label="Title" id="title" value="hello"/>
    <x-labeled-textarea-field type="text" name="body" label="Content" id="body"/>
    <x-form.button.primary text="submit" type="submit"/>
</form>
