<x-layout>
    <x-slot>
    <h3>
        User Profile Page
    </h3>
    
    <x-user-data :user="$user" />
    <x-user-profile :user="$user"/>
    <x-user-profile-data />
    </x-slot>
    <x-slot:alert>This is alert</x-slot:alert>
</x-layout>
