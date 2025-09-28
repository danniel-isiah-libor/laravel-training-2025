<x-layout>
    <x-slot:header>
        <div class="w-full flex justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Create Post</h1>
            <a href="{{ route('posts.index') }}" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View Posts</a>
        </div>
    </x-slot:header>
    <x-post-view-edit  action="{{ route('posts.store') }}"/>
</x-layout>