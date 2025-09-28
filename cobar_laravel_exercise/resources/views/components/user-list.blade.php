@props(['users'])

<div class="flex flex-wrap justify-center items-center gap-4">
    @foreach ($users as $user)
        <x-user-card :id="$user->id" :user="$user" />
    @endforeach
</div>
