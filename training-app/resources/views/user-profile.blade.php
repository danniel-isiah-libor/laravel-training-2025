<x-layout>
    
<x-slot name="signup">
        <x-sign-up/>
    </x-slot>

    <x-slot>
    <div style="border: 2px solid red; padding: 10px; margin: 10px;">
            <h1>User Profile</h1>

    <x-user-data :user="$data"/>
    </div>
    </x-slot>



</x-layout>