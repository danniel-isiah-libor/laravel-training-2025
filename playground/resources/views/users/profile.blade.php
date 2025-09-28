<x-layout>
    <x-form.layout>
        <x-slot:header>
            User Profile Page
        </x-slot:header>
    </x-form.layout>
    <x-slot style="color:green;">
         <x-slot:title >
            User Profile Page
        </x-slot:title>
    <x-user-profile  :user="$user"/>
    </x-slot>
</x-layout>


