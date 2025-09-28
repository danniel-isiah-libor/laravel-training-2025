<x-layout>
   <form action="{{ route('posts.store') }}" method="POST" style="color: white">
        @csrf
        <x-forms.input-field label="Title" name="title" />

        <br>

        <textarea name="body" cols="30" rows="10" class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>

        <br>

        <x-forms.button label="Create Post"/>

    </form>
</x-layout>

