<x-layout>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<x-form.layout>
  <x-slot:header>
    <img src="{{ asset('logo.png') }}" alt="Your Company" class="mx-auto h-10 w-auto" />
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
        <a href="{{ route('sign-up') }}"><h6  class="font-semibold text-red-300 hover:text-indigo-500 text-center">Does not have an account? Sign Up</h6></a>
  </x-slot:header>
  <x-slot>
    <form action="#" method="POST" class="space-y-6">
        <x-labeled-input-field id="email" label="Email Address" name="email" type="email"/>
        <x-labeled-input-field id="password" label="Password" name="password" type="password"/>
        <x-form.button.primary text="submit" type="submit"/>

    </form>
  </x-slot>
</x-form.layout>

</x-layout>

