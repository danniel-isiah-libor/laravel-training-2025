@extends('layouts.auth')
@section('content')
    <div class="w-full">
        <x-forms.post method="PUT" title="{{ $post->title }}" body="{{ $post->body }}"
            action="{{ route('post.update', $post) }}" label="Edit Post" />
    </div>
@endsection
