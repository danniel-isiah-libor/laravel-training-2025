
<x-layout>
    <x-form.layout>
        <x-slot:header>
            <h1>Edit Post</h1>
        </x-slot:header>
        {{ $post->title }}
       <form action="{{ route('posts.update', $post->id) }}" method="PUT">
            @csrf
            <x-labeled-input-field id="title" name="title" label="Title" value="{{ $post->title }}"/>
            <x-labeled-textarea-field name="body" id="body" cols="30" rows="10" value="{{ $post->body }}">
            </x-labeled-textarea-field>
            <x-form.button.primary text="submit" type="submit"/>
       </form>
    </x-form.layout>
</x-layout>
