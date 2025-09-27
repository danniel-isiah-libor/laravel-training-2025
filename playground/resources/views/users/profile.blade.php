<x-layout>
    <x-user-profile-data/>

    <x-user-data :user="$user"/>

    <x-user-profile style="color: green"/>

    <br>

    @php
        echo 'Name: ' . $user->name;
        echo "<br>";
        echo 'Email: ' . $user->email;
    @endphp

    <br>

    <?php
        echo 'Name: ' . $user->name;
        echo "<br>";
        echo 'Email: ' . $user->email;
    ?>

    {{-- <x-slot:alert>
        <h1>This is alert</h1>
    </x-slot:alert> --}}
</x-layout>
