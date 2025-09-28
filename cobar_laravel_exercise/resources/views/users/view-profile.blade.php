@props(['id', 'user'])

<x-layout>
    <div class="flex justify-center items-center m-5">
        <div class="rounded-lg p-4 w-full bg-gray-900">
            <div class="flex justify-between items-start">
                <div class="flex items-center mb-2 gap-2">
                    <div class="h-16 w-16 rounded-full bg-gray-700 flex items-center justify-center">
                        <i class="fas fa-user fa-lg" aria-hidden="true"></i>
                    </div>
                    <div class="flex flex-col ml-2">
                        <h3 class="text-lg">{{ $user->name }}</h3>
                        <p class="text-sm text-gray-500">{{ $user->email }}</p>
                    </div>
                </div>
                <div>
                    <x-forms.button :label="'Back to All Users'" :type="'button'" :route="'admin.users.profile'" />
                </div>
            </div>
            <hr class="my-4 border-gray-700" />
            <p class="text-gray-200">
                possum lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
</x-layout>
