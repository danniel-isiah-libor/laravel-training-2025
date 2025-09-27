<x-layout>
    <x-slot:alert>
        This is Alert Boy
    </x-slot:alert>
    <x-slot>
        <x-user-profile-data/>
        <x-user-data :user="$user" /> 
        <x-user-profile :user="$user" /> 
    </x-slot>
</x-layout>