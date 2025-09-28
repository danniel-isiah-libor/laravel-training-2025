<x-layout>
    <x-forms.post action={{ route('posts.update', $post) }} label="Edit Post" method="PUT" :data="$post"/>
</x-layout>
