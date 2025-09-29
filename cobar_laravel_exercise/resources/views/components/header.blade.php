<header class="basis-[5%] bg-gray-900 text-gray-200 p-4">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl">Laravel Training</h1>
        @auth
            <div class="flex justify-end items-center">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <x-forms.button :label="'Logout'" :type="'submit'" />
                </form>
            </div>
        @endauth
    </div>
</header>
