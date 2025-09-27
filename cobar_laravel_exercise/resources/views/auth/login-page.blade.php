@extends('welcome')
@section('content')
    <div class="h-full flex justify-center items-center">
        <form action="#" method="POST" class="border border-black/30 rounded-sm p-5 w-1/3 h-1/2 flex flex-col">
            @csrf

            <div class="basis-[80%]">
                <h1 class="text-center text-2xl uppercase my-5">Welcome to Login Page</h1>

                <div class="flex flex-col my-2">
                    <label for="email">Email</label>
                    <input class="border border-black/30 rounded-sm p-2" type="text" name="email" id="email"
                        placeholder="Email address">
                </div>

                <div class="flex flex-col my-2">
                    <label for="password">Password</label>
                    <input class="border border-black/30 rounded-sm p-2" type="password" name="password" id="password"
                        placeholder="Password">
                </div>
            </div>


            <div class="basis-[20%]">
                <div class="flex flex-col gap-2">
                    <button class="w-full border border-black/30 rounded-sm p-2" type="submit">
                        Sign-in
                    </button>

                    <div class="flex justify-end items-center">
                        <p>Not a member? <a href="{{ route('signup') }}" class="text-blue-500">Sign-up</a></p>
                    </div>
                </div>
            </div>


        </form>
    </div>
@endsection
