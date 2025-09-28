@extends('layouts.auth')
@section('content')
    <div>
        {{ Auth::user()->name }}
        <div class="mb-10"></div>
        <div class="flex flex-col justify-center items-center mt-4 text-[15px]">
            <div>Tired using this app?</div>
            <div><a href="{{ route('logout') }}" class="text-blue-700">Logout</a></div>
        </div>
    </div>
@endsection
