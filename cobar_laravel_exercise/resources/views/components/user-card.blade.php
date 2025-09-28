@props(['id', 'user'])

<div class="rounded-lg p-4 w-80 bg-gray-900">
    <div class="flex items-center mb-4 gap-2">
        <div class="h-16 w-16 rounded-full bg-gray-700 flex items-center justify-center">
            <i class="fas fa-user fa-lg" aria-hidden="true"></i>
        </div>
        <div class="flex flex-col ml-2">
            <h3 class="text-lg">{{ $user->name }}</h3>
            <p class="text-sm text-gray-500">{{ $user->email }}</p>
        </div>
    </div>
    <x-forms.button :label="'View User Profile'" :type="'button'" :id="$user->id" :route="'admin.users.view-profile', $user->id" />
</div>
