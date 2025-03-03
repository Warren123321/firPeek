<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitPeek</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <header class="items-center py-10 lg:grid-cols-3 font-semibold shadow-xl">
        <a class="ml-40">FitPeek</a>
    </header>

    <div class="rounded-2xl w-30 flex flex-col items-start space-y-6">
        <div class="mb-10 ml-20 m-40">
            <p class="text-8xl font-bold mb-5 text-primary-color">Virtual Try-on</p>
            <p class="text-6xl ml-3 text-secondary-color">Create your style</p>
        </div>

        <div class="flex space-x-4 ml-20">
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]  dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                                    </a>
                @else
                <form action="{{ route('login') }}" method="GET">
                    <x-primary-button class="rounded-3xl px-6 py-3 text-white bg-[#F886B5] hover:bg-[#e075a3] transition duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#F886B5] dark:focus-visible:ring-white sm:px-5 sm:py-3 sm:text-lg ml-10 shadow-lg w-50 h-14 text-center flex items-center justify-center">
                        SIGN IN
                    </x-primary-button>
                </form>

                @if (Route::has('register'))
                    <form action="{{ route('register') }}" method="GET">
                        <x-primary-button class="rounded-3xl px-6 py-3 text-white bg-[#F886B5] hover:bg-[#e075a3] transition duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#F886B5] dark:focus-visible:ring-white sm:px-5 sm:py-3 sm:text-lg ml-10 shadow-lg w-50 h-14 text-center flex items-center justify-center">
                            CREATE ACCOUNT
                        </x-primary-button>
                    </form>
                @endif
            @endauth
            </nav>
        </div>
    </div>
</body>
</html>
