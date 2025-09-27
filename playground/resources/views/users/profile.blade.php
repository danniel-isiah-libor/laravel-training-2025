<x-layout>
    <x-slot:alert>
        <h1> This is alert </h1>
    </x-slot:alert>
        <x-user-profile-data/>

        <x-user-data :user="$user"/>

        <x-user-profile style="color:green" :user="$user"/>
    {{-- </x-slot> --}}
</x-layout>
