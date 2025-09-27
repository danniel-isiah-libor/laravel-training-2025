<x-layout>
    <form action="{{ route('interests.store') }}" method="POST" style="color: white">
        @csrf

        @foreach($interests as $interest)
            <x-forms.input-field name="interests[]" label="{{ $interest }}" value="{{ $interest }}" type="checkbox"/>
        @endforeach

        <x-forms.input-field name="interests[]" label="Python" value="Python" type="checkbox"/>

        <br>

        @error('interests')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror

        <br>

        <button type="submit">Submit</button>
    </form>
</x-layout>
