<x-blank-layout>
    <form class="mt-12" :action="route{{ 'signin' }}" method="POST">
        @csrf
        <div class="border border-gray-900/10 p-12 rounded-md">
            <h2 class="text-base/7 font-bold text-gray-900 text-center">Sign In</h2>
            <hr class="font-bold mt-5 text-gray-300">
            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-full">
                    <x-forms.input-label for="email" label="Email" />
                    <x-forms.input-field id="email" type="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="sm:col-span-full">
                    <x-forms.input-label for="password" label="Password" />
                    <x-forms.input-field id="password" type="password" name="password"/>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <x-forms.submit-button buttonLabel="Submit" />
            </div>
        </div>
    </form>
</x-blank-layout>