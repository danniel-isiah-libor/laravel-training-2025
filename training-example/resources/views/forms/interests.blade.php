<x-layout-form>
    <x-slot>
    <div class="flex min-h-full flex-col justify-center">
        <x-auth-header title="Select Your Interests"/>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('interest') }}" method="POST" class="space-y-6">
            @csrf
                @foreach ($interests as $interest)
                    <x-forms.input-checkbox
                            name="interests[]"
                            label="{{ $interest }}"
                            type="checkbox"
                            value="{{ $interest }}"
                        />
                @endforeach
                <x-forms.button label="Submit Interests" />
                @error('interests')
                    <div class="text-sm text-red-600 dark:text-red-400">
                        {{ $message }}
                    </div>
                @enderror
            </form>
        </div>
    </div>
    </x-slot>
</x-layout-form>