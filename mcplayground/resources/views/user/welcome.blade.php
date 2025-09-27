@extends('layouts.light')
@section('content')
    <x-card-slot>
        <x-icon>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M13.1427 20.9999C10.8077 19.5438 9.25254 16.9522 9.25254 13.9968C9.25254 12.4783 10.4833 11.2476 12.0008 11.2476C13.5184 11.2476 14.7491 12.4783 14.7491 13.9968C14.7491 15.5153 15.9798 16.746 17.4974 16.746C19.0149 16.746 20.2457 15.5153 20.2457 13.9968C20.2457 9.44139 16.5544 5.74922 12.0017 5.74922C7.44907 5.74922 3.75781 9.44139 3.75781 13.9968C3.75781 15.0122 3.87145 16.001 4.08038 16.954M8.49027 20.2989C7.23938 18.5138 6.50351 16.3419 6.50351 13.9968C6.50351 10.9599 8.96405 8.49844 11.9992 8.49844C15.0343 8.49844 17.4948 10.9599 17.4948 13.9968M17.7927 19.4806C17.6937 19.4861 17.5966 19.4953 17.4967 19.4953C14.4616 19.4953 12.0011 17.0338 12.0011 13.9969M19.6734 6.47682C17.7993 4.34802 15.0593 3 12.0004 3C8.94141 3 6.20138 4.34802 4.32734 6.47682"
                        stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
        </x-icon>
        <div class="text-xl mt-4">Show me what you are</div>
        <div class="text-neutral-500 text-[15px]">Check all that interests you.</div>
        <div class="w-full border-0 border-t-2 border-neutral-200 border-dashed my-4"></div>
        <form method="POST" action="{{ route('save.interests') }}" class="w-full">
            @csrf
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-2">
                    @foreach ($interests as $interest)
                        <x-input-checkbox value="{{ $interest }}" label="{{ $interest }}" name="interests[]" />
                    @endforeach
                    <x-input-checkbox value="Python" label="Python" name="interests[]" />
                    @error('interests')
                        <div class="text-[15px] text-rose-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 w-full mt-4">
                    <x-submit-button label="Get Started" />
                </div>
            </div>
        </form>
    </x-card-slot>
@endsection
