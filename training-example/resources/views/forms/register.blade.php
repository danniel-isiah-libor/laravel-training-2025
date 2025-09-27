<x-layout-form>
    <x-slot>
    <div class="flex min-h-full flex-col justify-center">
        <x-auth-header title="Register an account"/>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf
                <x-forms.input-field label="Name" name="name" />
                <x-forms.input-field label="Email" name="email" />
                <x-forms.input-field label="Password" type="password" name="password" />
                <x-forms.input-field label="Confirm Password" type="password" name="password_confirmation" />
                
                <x-forms.button label="Register" />
            </form>
            <p class="mt-5 text-center text-sm/6 text-gray-500">
            Already a member?
            <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500 dark:hover:text-indigo-300">Back to Login</a>
            </p>
        </div>
    </div>
    </x-slot>
</x-layout-form>
