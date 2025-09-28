<x-layout>
    <div class="h-full flex justify-center items-center">
        <form action="{{ route('user.store') }}" method="POST"
            class="rounded-lg p-5 w-1/3 h-2/3 flex flex-col bg-gray-900">
            @csrf

            <div class="basis-[80%]">
                <h1 class="text-center text-2xl uppercase my-5">Welcome to Login Page</h1>

                <div class="flex flex-col my-2">
                    <label for="name">Full Name</label>
                    <input class="border border-black/30 rounded-sm p-2 bg-gray-200 text-gray-900" type="text"
                        name="name" id="name" required autocomplete="name" placeholder="Full Name"
                        value="{{ old('name') }}">
                </div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex flex-col my-2">
                    <label for="email">Email</label>
                    <input class="border border-black/30 rounded-sm p-2 bg-gray-200 text-gray-900" type="text"
                        name="email" required autocomplete="email" id="email" placeholder="Email address"
                        value="{{ old('email') }}">
                </div>
                @error('email')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex flex-col my-2">
                    <label for="password">Password</label>
                    <input class="border border-black/30 rounded-sm p-2 bg-gray-200 text-gray-900" type="text"
                        name="password" required autocomplete="password" id="password" placeholder="Password"
                        value="{{ old('password') }}">
                </div>
                @error('password')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex flex-col my-2">
                    <label for="password_confirmation">Confirm Password</label>
                    <input class="border border-black/30 rounded-sm p-2 bg-gray-200 text-gray-900" type="text"
                        name="password_confirmation" required autocomplete="password_confirmation"
                        id="password_confirmation" placeholder="Password">
                </div>
                @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            <div class="basis-[20%]">
                <div class="flex flex-col gap-2">
                    <x-forms.button :label="'Sign-up'" :type="'submit'" />

                    <div class="flex justify-end items-center my-2">
                        <p>Already a member? <a href="{{ route('login') }}" class="text-blue-500">Sign-in</a></p>
                    </div>
                </div>
            </div>

        </form>
    </div>
</x-layout>
