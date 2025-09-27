<x-layout>
   <form action="{{ route('interests.store') }}" method="POST" style="color: white">
        @csrf
        @foreach ($interests as $interest)
            <x-forms.input-field label="{{ $interest }}" name="interest[]"
             value={{ $interest }} type="checkbox"/>
        @endforeach

        <x-forms.input-field name="interests[]" label="Python" value="Python" type="checkbox"/>

        @error('interests')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror
         {{-- <input type="checkbox" value="laravel"> Laravel
        <br>
        <input type="checkbox" value="vue.js"> Vue JS
        <br>
        <input type="checkbox" value="react.js"> React JS
        <br>
        <input type="checkbox" value="angular.js"> Angular JS

        <br>
        <button type="submit">Submit</button> --}}

         <x-forms.button label="Submit" type=submit />

    </form>
</x-layout>
