@extends('layouts.mainlayout')
@section('content')
    <div class="relative p-20 flex justify-center">
        <div class="absolute w-28 h-20 rounded-xl z-0 -bottom-5 bg-orange-400"></div>
        <div class="bg-white/30 border border-white/20 z-10 backdrop-blur-xl absolute top-0 rounded-xl w-full h-full">
            <div class="p-4">
                {{-- <div>{{$data->name}}</div> --}}
                @foreach ($data as $user)
                    <div>{{ $user->name }}</div>
                @endforeach
            </div>
        </div>
    </div>
@endSection
