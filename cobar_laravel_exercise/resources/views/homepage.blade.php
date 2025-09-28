<x-layout>
    <div class="h-full flex flex-col justify-center items-center gap-5">
        <h1 class="text-4xl">Welcome to the Homepage</h1>
        <p class="text-lg">This is the homepage of our Laravel application.</p>
        <div class="w-96 mt-4">
            <x-forms.button :label="'Go to User Profile'" :type="'button'" :route="'login'" />
        </div>
    </div>
</x-layout>
