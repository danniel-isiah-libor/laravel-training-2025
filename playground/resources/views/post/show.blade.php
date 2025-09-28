@php
    echo $post;
@endphp

<x-layout>
    <x-form.layout>
        <x-slot>
            <x-labeled-input-field id="post" name="post" label="Post" type="text" value="{{ $post->body }}"/>
        </x-slot>
</x-layout>
