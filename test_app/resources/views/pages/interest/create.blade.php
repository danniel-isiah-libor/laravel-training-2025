<x-layout>
    <x-slot:header>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Interests</h1>
    </x-slot:header>
    <form class="max-w-md mx-auto mt-12" :action="route{{ 'interests.store' }}" method="POST">
    @csrf
        <div class="border border-gray-900/10 p-12 rounded-md">
        <h2 class="text-base/7 font-bold text-gray-900 text-center mb-10">What's your interest?</h2>
        @foreach($interests as $interest)
        <x-forms.input-checkbox
            name="interests[]"
            :item="$interest" 
            :checked="is_array(old('interests')) && in_array($interest->id, old('interests'))"
        />
        @endforeach
        @php
            $additional = [ 'id' => 5, 'name' => 'Test'];
        @endphp
        <input
            type="checkbox"
            name="interests[]"
            value="{{ $additional['id']}}"
            :checked="is_array(old('interests')) && in_array($additional['id'], old('interests'))"
        >{{ $additional['name']}}</input>
        @error('interests')  
        <div class="mt-1 text-red-500 text-xs">
            {{ $message }}
        </div>
        @enderror
        <div class="flex justify-end">
            <x-forms.submit-button buttonLabel="Submit" />
        </div>
        </div>
    </form>
</x-layout>