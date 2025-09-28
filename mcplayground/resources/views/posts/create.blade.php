@extends('layouts.auth')
@section('content')
    <div class="w-full">
        <x-forms.post action="{{ route('post.store') }}" />
    </div>
@endsection
