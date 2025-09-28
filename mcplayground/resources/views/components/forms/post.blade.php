@props([
    'action' => '',
    'method' => 'POST',
    'label' => 'Post',
    'title' => '',
    'body' => '',
])

<form action="{{ $action }}" method="POST" class="w-full">
    @csrf
    @if (strtoupper($method) !== 'POST')
        @method($method)
    @endif

    <x-input-component value="{{ $title }}" label="Title" name="title" />
    <x-input-texarea value="{{ $body }}" label="Body" name="body" />

    <div class="flex flex-col mt-4">
        <x-submit-button label="{{ $label }}" />
    </div>
</form>
