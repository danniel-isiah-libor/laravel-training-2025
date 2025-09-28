<x-layout>
    @if ($user)
        <div class="flex justify-center my-5">
            <x-user-card :id="$user->id" :user="$user" />
        </div>
    @endif

    @if ($users && $users->count())
        <h2 class="text-center text-2xl my-5 uppercase">All Users</h2>
        <x-user-list :users="$users" />
    @elseif (!$user)
        <p class="text-center">No users found.</p>
    @endif
</x-layout>
