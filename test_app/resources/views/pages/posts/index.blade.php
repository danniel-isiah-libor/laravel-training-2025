<x-layout>
    <x-slot:header>
        <div class="flex justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Posts</h1>
              <a href="{{ route('posts.create') }}" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">+ Add Post</a>
        </div>
    </x-slot:header>
    @if (session('success'))
        <x-alerts.success-alert :message="session('success')" />
    @endif
    <div class="max-w-lg mx-auto text-gray-700 mt-12">
        @foreach ($posts as $post)  
        <div class="border border-gray-900/10 p-12 pb-4 rounded-md mb-4">
            <div class="flex flex-col items-start w-full text-gray-600 text-xs">
                <div>{{ $post->updated_at->diffForHumans() }}</div>
            </div>
            <div class="font-bold text-gray-500 mb-6 mt-10">
                <h2>
                    {{ $post->title }}
                </h2>
            </div>
            <div>{{ $post->body }}</div>
            <div class="flex flex-col items-end w-full text-gray-600 text-xs mt-10">
                <div>
                    <div>{{ $post->user->name }}</div>
                    <div>{{ $post->user->email }}</div>
                </div>
            </div>
            <div class="flex gap-2 mt-4">
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit Post</a>
                <form action=" {{ route('posts.destroy', ['post' => $post->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white text-sm font-semibold bg-red-500 py-2 px-4 rounded-md hover:text-gray-900 hover:bg-red-400 cursor-pointer">Delete Post</button>
                </form>
            </div>
        </div>
        @endforeach
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</x-layout>