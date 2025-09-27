<x-layout>
    <x-form.layout>
        <x-slot:header>
             <img src="{{ asset('logo.png') }}" alt="Your Company" class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign up to have an account</h2>
            <a href="{{ route('sign-in') }}"><h6  class="font-semibold text-red-300 hover:text-indigo-500 text-center">Already have an account? Sign In</h6></a>
        </x-slot:header>
        <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
            @csrf
            <x-labeled-input-field id="name" name="name" label="Name" type="text"/>
            <x-labeled-input-field id="email" name="email" label="Email" type="email"/>
            <x-labeled-input-field id="password" name="password" label="Password" type="password"/>
            <x-labeled-input-field id="confirmPassword" name="confirmPassword" label="Password Confirmation" type="password"/>
            <x-form.button.primary text="submit" type="submit"/>
        </form>
    </x-form.layout>


</x-layout>
