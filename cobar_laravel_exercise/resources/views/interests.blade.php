@extends('welcome')
@section('content')
    <div class="h-full flex justify-center items-center">
        <form action="{{ route('interests.store') }}" method="POST"
            class="border border-black/30 rounded-lg w-1/2 h-3/5 p-5 shadow-lg shadow-black/60 flex flex-col">
            @csrf

            <div class="basis-[80%]">
                @foreach ($interests as $interest)
                    <input type="checkbox" name="interests[]" value="{{ $interest }}">
                    <label class="ms-2" for="{{ $interest }}">{{ $interest }}</label>
                    <br>
                @endforeach
                @error('interests')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="basis-[20%]">
                <button class="w-full border border-black/30 rounded-sm p-2" type="submit">Submit</button>
            </div>

        </form>
    </div>
@endsection
