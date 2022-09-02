<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9</title>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <!-- Tailwind -->
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">--}}
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>
</head>
<body>
<header>
    <nav class="flex items-center justify-around flex-wrap bg-teal-500 p-6">
        <div class="flex items-center text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">LARAVEL 9</span>
        </div>
        <div class="block lg:hidden">
            <button id="btn"
                    class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
                        Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div id="menu" class="w-full block lg:flex lg:items-center lg:w-auto hidden font-medium">
            <div class="text-sm lg:flex-grow">
                <a href="{{route('home')}}"
                   class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Home
                </a>
                <a href="{{route('about')}}"
                   class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    About us
                </a>
                <a href="{{route('Cursos.index')}}"
                   class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Blog
                </a>
                <a href="{{route('contact')}}"
                   class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Contact
                </a>
            </div>
        </div>
    </nav>

</header>
<main>
    <section class="max-w-4xl mx-auto p-6 mb-20">
        @yield('content')
    </section>

    <footer
        class=" w-full fixed bottom-0 left-0 border-t-2 border-r-sky-900 p-4 bg-white md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span class="text-sm text-gray-800 sm:text-center dark:text-gray-400">© 2022 <a href="https://github.com/SandraTM22"
                                                                                    class="hover:underline">SandraTM22</a>. All Rights Reserved.
    </span>
        <ul class="flex flex-wrap justify-between items-center mt-3 text-sm text-gray-800 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="{{route('about')}}" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="{{route('contact')}}" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>
</main>
</body>
<script src="{{ asset('js/app.js')}}"></script>
</html>
