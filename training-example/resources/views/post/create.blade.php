<x-layout-form>
    <x-slot>
        <div class="flex min-h-full flex-col justify-center">
            <x-auth-header title="Create Post"/>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="{{ route('post.store') }}" method="POST" class="space-y-6">
                @csrf
                    <x-forms.input-field label="Title" name="title" />
                    <textarea id="message" name="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                    <x-forms.button label="Create Post" />
                </form>
            </div>
        </div>
    </x-slot>
</x-layout-form>