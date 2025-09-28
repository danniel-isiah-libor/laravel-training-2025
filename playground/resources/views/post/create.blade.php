<x-layout>
    <x-form.layout>
        <x-slot:header>
            <h1>Create a blog</h1>
        </x-slot:header>
       <x-post action="{{ route('posts.store') }} "/>
    </x-form.layout>
</x-layout>
