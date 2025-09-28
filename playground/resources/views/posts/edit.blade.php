<x-layout>
    {{-- <a href="{{ route('posts.destroy', $post) }}">Delete Post</a> --}}

    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')

        <x-forms.button label="Delete Post"/>
    </form>

    <x-forms.post action="{{ route('posts.update', $post) }}" label="Edit Post" method="PUT" :data="$post"/>
</x-layout>
