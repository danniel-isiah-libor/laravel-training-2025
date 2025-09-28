<x-layout>
    <x-form.layout>
        <x-slot>
            {{ $posts->links() }}
            @foreach ($posts as $post )
            @php
                $postLabel = $post->created_at->diffForHumans()
            @endphp
                <div class="mt-10">
                    <span class=" text-gray-400">Posted {{ $postLabel }}</span>
                    <x-form.card :content="$post->body"/>

                    <div class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 ">
                        <div class="grid grid-cols-2">
                            <div class="">
                                <img src="{{ asset('avatar.jpg') }}" alt="" class="size-8 rounded-full bg-gray-800 outline -outline-offset-1 outline-white/10" />
                            </div>
                            <div class="grid grid-rows-2">
                                <span>Author: {{ $post->user['name'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>

          @endforeach
        </x-slot>
    </x-form.layout>
</x-layout>
