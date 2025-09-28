<x-layout>
    <div class="h-full flex justify-center items-center">
        <form action="{{ route('user.login') }}" method="POST"
            class="rounded-lg p-5 w-1/3 h-2/3 flex flex-col bg-gray-900">
            @csrf

            <div class="basis-[80%]">
                <h1 class="text-center text-2xl uppercase my-5">Welcome to Login Page</h1>

                <div class="flex flex-col my-2">
                    <label for="email">Email</label>
                    <input class="border border-black/30 rounded-sm p-2 bg-gray-200 text-gray-900" type="text"
                        name="email" required autocomplete="email" id="email" placeholder="Email address">
                </div>

                <div class="flex flex-col my-2">
                    <label for="password">Password</label>
                    <input class="border border-black/30 rounded-sm p-2 bg-gray-200 text-gray-900" type="password"
                        name="password" required autocomplete="password" id="password" placeholder="Password">
                </div>
            </div>


            <div class="basis-[20%]">
                <div class="flex flex-col gap-2 mt-4">
                    <x-forms.button :label="'Login'" :type="'submit'" />

                    <div class="flex justify-end items-center my-2">
                        <p>Not a member? <a href="{{ route('signup') }}" class="text-blue-500">Sign-up</a></p>
                    </div>
                </div>
            </div>

        </form>
    </div>
</x-layout>
