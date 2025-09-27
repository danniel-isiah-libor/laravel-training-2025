<x-layout-form>
    <x-slot>
        <div class="flex min-h-full flex-col justify-center">
            <x-auth-header title="Sign in to your account"/>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                    <x-forms.input-field label="Email" name="email" />
                    <x-forms.input-field label="Password" name="password" type="password" />
                    
                    <x-forms.button label="Login" />
                </form>
                <p class="mt-5 text-center text-sm/6 dark:text-gray-400">
                    Not account yet?
                    <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">Register here!</a>
                </p>
            </div>
        </div>
    </x-slot>
</x-layout-form>