<x-layout>
    <x-auth-header title="Sign in your account" />

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="{{ route('user.login') }}" method="POST" class="space-y-6">
        @csrf
        <x-forms.input-field label="Email" name="email" type="email"/>

        <x-forms.input-field label="Password" name="password" type="password"/>

        <x-forms.button label="Sign in" />
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-400">
      Create an account?
      <a href="{{ route('sign-up') }}" class="font-semibold text-indigo-400 hover:text-indigo-300">Sign up</a>
    </p>
  </div>
</div>

</x-layout>
