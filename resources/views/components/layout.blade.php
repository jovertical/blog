<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Manifest -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="min-h-screen">
    <div class="p-8 md:p-16 lg:p-24 flex flex-col items-center">
        <div class="w-full md:mb-10" x-data="{ open: false }">
            <div class="fixed md:relative left-0 right-0 top-0 z-20 flex items-center justify-between md:justify-center w-full px-6">
                <img src="/png/logo.png" alt="Logo" class="w-24 md:w-32">

                <button class="md:hidden transition" @click="open = !open">
                    <div class="w-6 h-2px bg-gray-darker mb-1 duration-500 ease-in-out" :class="{ 'transform -rotate-45': open }"></div>
                    <div class="w-6 h-2px bg-gray-darker mb-1" :class="{ 'hidden': open }"></div>
                    <div class="w-6 h-2px bg-gray-darker duration-500 ease-in-out" :class="{ 'transform rotate-45 -mt-1': open }"></div>
                </button>
            </div>

            <div class="flex md:hidden flex-col fixed inset-0 z-10 px-16 pt-32 bg-white border max-h-full overflow-y-auto" x-show="open">
                @foreach ($links as $link)
                    <a href="{{ '/' . $link }}" class="mb-5 text-lg text-gray {{ Request::path() === $link ? 'text-gray-darker' : '' }}">
                        {{ Str::of($link)->ucfirst() }}
                    </a>
                @endforeach
            </div>

            <div class="hidden md:flex justify-center">
                @foreach ($links as $link)
                    <a href="{{ '/' . $link }}" class="mx-3 text-lg text-gray {{ Request::path() === $link ? 'text-gray-darker' : '' }} hover:text-gray-darker">
                        {{ Str::of($link)->ucfirst() }}
                    </a>
                @endforeach
            </div>
        </div>
        <main class="pt-24 md:pt-0">
            {{ $slot }}
        </main>
    </div>

    <!-- Main Script -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>