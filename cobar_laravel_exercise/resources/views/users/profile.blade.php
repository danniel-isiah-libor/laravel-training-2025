@extends('welcome')

@section('content')
    @if (is_array($user) && isset($user['name']))
        <div class="flex justify-center my-5">
            <x-user-card :id="$id" :user="$user" />
        </div>
    @else
        <x-user-list :users="$user" />
    @endif
@endsection
