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
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Merriweather" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            font-family: 'Miriam Libre', Merriweather;
            margin: 0;
            padding: 0;
        }
    </style>

    <!-- Main Style -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="min-h-screen">
    @if ($variant === 'wide')
        <div class="flex items-center justify-between px-4 md:px-8 py-4 md:py-4">
            <a href="/">
                <img src="/png/logo.png" alt="Logo" class="w-12 md:w-16">
            </a>

            <div x-data="{ open: false }">
                <button @click="open = !open" type="button" class="items-center h-10 text-gray hover:text-gray-darker transition">
                    <div :class="{ 'transform -rotate-45 -mb-3px': open }" class="w-6 h-3px bg-gray rounded mb-1 duration-500 ease-in-out"></div>
                    <div :class="{ 'hidden': open }" class="w-6 h-3px bg-gray rounded mb-1"></div>
                    <div :class="{ 'transform rotate-45 -mt-3px': open }" class="w-6 h-3px bg-gray rounded duration-500 ease-in-out"></div>
                </button>

                <div x-show="open" class="flex flex-col items-center justify-center fixed inset-0 bg-overlay">
                    <button @click="open = false" class="text-white hover:text-gray-lighter mb-4">
                        <x-icon name="x" size="extra-large" />
                    </button>
                    <ul>
                        @foreach ($links as $link)
                            <li class="text-4xl md:text-5xl text-white text-center hover:text-gray-lighter mb-4">
                                <a href="{{ '/' . $link }}">
                                    {{ Str::of($link)->ucfirst() }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="p-8 md:p-16 lg:p-24 flex flex-col items-center">
        @if ($variant === 'clean')
            <div class="mb-6">
                <a href="/">
                    <img src="/png/logo.png" alt="Logo" class="w-12 md:w-20">
                </a>
            </div>
        @elseif ($variant === 'default')
            <div x-data="{ open: false }" class="w-full md:mb-10">
                <div class="fixed md:relative left-0 right-0 top-0 z-20 flex items-center justify-between md:justify-center w-full px-6 bg-white">
                    <a href="/">
                        <img src="/png/logo.png" alt="Logo" class="w-12 md:w-20 my-5 md:mt-0">
                    </a>

                    <button class="md:hidden transition" @click="open = !open">
                        <div :class="{ 'transform -rotate-45 -mb-3px': open }" class="w-6 h-3px bg-gray rounded mb-1 duration-500 ease-in-out"></div>
                        <div :class="{ 'hidden': open }" class="w-6 h-3px bg-gray rounded mb-1"></div>
                        <div :class="{ 'transform rotate-45 -mt-3px': open }" class="w-6 h-3px bg-gray rounded duration-500 ease-in-out"></div>
                    </button>
                </div>

                <div x-show="open" class="flex md:hidden flex-col fixed inset-0 z-10 px-16 pt-32 bg-white border max-h-full overflow-y-auto">
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
        @endif

        <main class="w-full pt-24 md:pt-0">
            {{ $slot }}
        </main>
    </div>
    
    <!-- Main Script -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>