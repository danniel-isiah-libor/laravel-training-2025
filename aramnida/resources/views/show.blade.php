


<x-layout>

    <x-slot:alert>
        <h1>This is alert</h1>
    </x-slot:alert>

    <h1>User Profile Page</h1>
    <ul>
        <li>Name: {{$user->name}}</li>

        <li>Email: {{$user->email}}
    </ul>

</x-layout>