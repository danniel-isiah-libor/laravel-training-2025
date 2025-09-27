<x-layout>
    <x-form.layout>
        <form action="{{ route('interest.validate') }}" method="POST">
        @csrf
        @foreach ($interests as $interest)
           <x-labeled-input-field type="checkbox" value="{{ $interest }}" name="interests[]" label="{{ $interest }}"/>
        @endforeach

            <x-labeled-input-field type="checkbox" value="ai" name="interests[]" label="ai"/>

        @error('interests')
                <p class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
        @enderror
        </form>
    </x-form.layout>
</x-layout>
