<x-layout>
    <x-forms.form-container>
        <x-forms.form-header title="Register" />
            <form action="{{ route('auth.register') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <x-forms.form-label labelFor="name" name="Name" />
                    <x-forms.form-input id="name" type="text" name="name" />
                </div>

                <div>
                    <x-forms.form-label labelFor="email" name="Email Address" />
                    <x-forms.form-input id="email" type="email" name="email" />
                </div>

                <div>
                    <x-forms.form-label labelFor="password" name="Password" />
                    <x-forms.form-input id="password" type="password" name="password" />
                </div>

                <div>
                    <x-forms.form-label labelFor="password_confirmation" name="Password Confirmation" />
                    <x-forms.form-input id="password_confirmation" type="password" name="password_confirmation" />
                </div>

                <div>
                    <x-forms.form-button>
                        Register
                    </x-forms.form-button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Already have an account?
                <a href="/login" class="font-semibold text-indigo-400 hover:text-indigo-300">Login here</a>
            </p>
    </x-forms.form-container>
</x-layout>
