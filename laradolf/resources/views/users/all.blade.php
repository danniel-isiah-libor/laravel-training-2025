@component('components.layout')
    @slot('title') All Users @endslot
    <h2>All Users</h2>
    @if(empty($users))
        <h3>No users found</h3>
    @else
        <ul>
            @foreach($users as $uid => $user)
                <li>
                    <strong>User {{ $uid }}:</strong>
                    <ul>
                        @foreach($user as $key => $value)
                            <li><strong>{{ $key }}:</strong> {{ $value }}</li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    @endif
@endcomponent
