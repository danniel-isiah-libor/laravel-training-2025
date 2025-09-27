<x-layout>
    <x-auth-header title="Sign up" />

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="#" method="POST" class="space-y-6">

        <x-forms.input-field label="Name" name="name" />

        <x-forms.input-field label="Email" name="email" type="email"/>

        <x-forms.input-field label="Password" name="password" type="password"/>

        <x-forms.input-field label="Password Confirmation" name="password_confirmation" type="password"/>

        <x-forms.button label="Sign up" />
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-400">
      Already a member?
      <a href="{{ route('signin') }}" class="font-semibold text-indigo-400 hover:text-indigo-300">Sign in</a>
    </p>
  </div>
</div>

</x-layout>
