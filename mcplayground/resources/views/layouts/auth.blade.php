<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-white">
    <div class="p-0">
        <div class="bg-neutral-200/60 overflow-hidden flex flex-col min-h-screen text-neutral-900">
            <div class="bg-white flex items-center static h-12 border-b border-neutral-200">
                <div class="w-[350px] flex items-center gap-1 px-3">
                    <div class="bg-red-500 w-4 h-4 rounded-full flex-none"></div>
                    <div class="bg-yellow-400 w-4 h-4 rounded-full flex-none"></div>
                    <div class="bg-green-500 w-4 h-4 rounded-full flex-none"></div>
                </div>
                <div class="flex-1">
                    <div class="font-medium text-neutral-800s">Blog</div>
                </div>
            </div>
            <div class="flex flex-1 text-neutral-900">
                <div class="bg-white p-2 static w-[350px]">
                </div>
                <div class="flex-1 p-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
