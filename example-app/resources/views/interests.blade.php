<x-layout>
    <x-forms.form-container>
        <form action="{{ route('interests.store') }}" class="flex flex-col gap-2" method="POST">
            @csrf

            @if (session('success'))
                <p class="bg-green-500 text-white text-center rounded-md p-2">
                    {{ session('success') }}
                </p>
            @elseif(session('error'))
                <p class="bg-red-500 text-white text-center rounded-md p-2">
                    {{ session('error') }}
                </p>
            @endif

            @foreach ($interests as $interest)
                <div class="flex items-center gap-2">
                    <input type="checkbox" value="{{ $interest}}" id="{{ $interest }}"
                        name="interests[]" />
                    <label for="{{ $interest }}">{{ $interest }}</label>
                </div>
            @endforeach
            <div class="flex items-center gap-2">
                <input type="checkbox" value="python" id="python"
                    name="interests[]" />
                <label for="python">Python</label>
            </div>

            <button type="submit" class="bg-green-500 rounded-md py-2">Submit</button>
        </form>

    </x-forms.form-container>

</x-layout>
