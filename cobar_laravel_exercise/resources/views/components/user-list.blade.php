<div>
    <h2 class="text-center text-2xl my-5 uppercase">All Users</h2>
    <div class="flex flex-wrap justify-center items-center gap-2">
        @if (is_array($users) && count($users))
            @foreach ($users as $id => $user)
                <x-user-card :id="$id" :user="$user" />
            @endforeach
        @else
            <p>No users found.</p>
        @endif
    </div>
</div>
