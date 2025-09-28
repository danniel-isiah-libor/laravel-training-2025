<x-layout>
    <x-forms.form-container>
        <x-forms.form-header title="Sign In" />
            <form action="#" method="POST" class="space-y-6">
                @csrf
                @if (session('message'))
                    {{ session('message') }}
                @endif
                <div>
                    <x-forms.form-label labelFor="email" name="Email Address" />
                    <x-forms.form-input id="email" type="text" name="email" />

                </div>

                <div>
                    <x-forms.form-label labelFor="password" name="Password" />
                    <x-forms.form-input id="password" type="password" name="password" />
                </div>

                <div>
                    <x-forms.form-button>
                        Sign In
                    </x-forms.form-button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Not a member?
                <a href="/register" class="font-semibold text-indigo-400 hover:text-indigo-300">Register here</a>
            </p>
    </x-forms.form-container>
</x-layout>
