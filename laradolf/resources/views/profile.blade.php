@component('components.layout')
    @slot('title') User Profile @endslot
    <h2>User Profile</h2>
    Name: {{ $user->Name }}
    <br>
    Email: {{ $user->Email }}
@endcomponent