@props([
    'action' => null,
    'method' => 'POST',
    'label' => null,
    'data' => null
    ])
<form class="mx-auto max-w-xl mt-12" action="{{ $action }}" method="POST">
    @csrf
    @method($method)
    <div class="border border-gray-900/10 p-12 rounded-md">
        <h2 class="text-base/7 font-bold text-gray-900 text-center">What's your idea?</h2>
        <hr class="font-bold mt-5 text-gray-300">
        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
            <div class="sm:col-span-full">
                <x-forms.input-label for="title" label="Title" />
                <x-forms.input-field id="title" name="title" type="text" value="{{ $method == 'POST' ? old('title') : $data->title }}"/>
            </div>
            <div class="sm:col-span-full">
                <x-forms.input-label for="body" label="Content" />
                <div class="mt-2">
                    <textarea id="body" name="body" rows="3" class="block w-full h-35 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ $method == 'POST' ? old('body') : $data->body }}</textarea>
                </div>
                @error('body')  
                    <div class="mt-1 text-red-500 text-xs">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-forms.submit-button buttonLabel="Submit" />
        </div>
    </div>
</form>