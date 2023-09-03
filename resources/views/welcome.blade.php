<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico') }}"/>
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="{{ Vite::asset('resources/images/apple-icon.png') }}"
    />


    <title>{{ Str::title(__('custom.extraordinary_settlements')) }}</title>

    <!-- Scripts -->
    <script>
        // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/theme_switcher.js'])
</head>

<body class="text-gray-800 antialiased">
<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start" >
            <button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button"
                onclick="toggleNavbar('example-collapse-navbar')"
            >
                <i class="text-white fas fa-bars"></i>
            </button>

        </div>

        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
            {{--<ul class="flex flex-col lg:flex-row list-none mr-auto">
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/landing">
                        <i class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>Docs</a>
                </li>
            </ul>--}}

            @if (Route::has('login'))
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    @auth
                        <li class="flex items-center">
                            <a href="{{ url('/dashboard') }}" class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">Dashboard</a>
                        </li>
                    @else
                        <li class="flex items-center">
                            <a href="{{ route('login') }}" class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="flex items-center">
                                <a href="{{ route('register') }}" class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">

                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#pablo">
                        <i class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg"></i>
                        <span class="lg:hidden inline-block ml-2">Share</span></a>
                </li>

                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#pablo">
                        <i class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "></i>
                        <span class="lg:hidden inline-block ml-2">Tweet</span>
                    </a>
                </li>

                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#pablo">
                        <i class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg "></i>
                        <span class="lg:hidden inline-block ml-2">Star</span>
                    </a>
                </li>

                <li class="flex items-center">
                    <div class="mt-5">
                        <x-theme-switcher />
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("{{ Vite::asset('resources/images/spectacular_settlement.jpg') }}");'>
          <span id="blackOverlay" class="w-full h-full absolute opacity-50 dark:opacity-75 bg-indigo-800/50"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            {{ __('custom.create_extraordinary_settlements') }}
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                            {{ __('custom.hero_intro') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-[40px] bg-indigo-100 dark:bg-indigo-950 drop-shadow-2xl"></div>

    <section class="relative bg-indigo-100 dark:bg-indigo-800 h-auto">

        <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("{{ Vite::asset('resources/images/faerun_map.jpg') }}");'>
            <span class="w-full h-full absolute opacity-50 dark:opacity-75 bg-indigo-300 dark:bg-indigo-800/50"></span>
            <span class="w-full h-full absolute opacity-50 dark:opacity-75 bg-indigo-300 dark:bg-indigo-800"></span>
        </div>

        {{--<div class="absolute top-0 w-full h-full bg-center bg-cover">
            <span class="w-full h-full absolute opacity-50 dark:opacity-75 bg-red-100 dark:bg-green-800/75"></span>
        </div>--}}

        <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 place-items-center py-2 px-2">

            {{--TRADING POST CARD--}}
            <div class="w-auto lg:w-full h-[650px] bg-indigo-50 border border-gray-200 dark:border-sky-800 rounded-lg shadow dark:bg-indigo-950 overflow-y-auto">
                <a href="#" class="hover:grayscale">
                    <div
                        class="w-auto lg:w-full h-1/2 bg-cover bg-center rounded-t-lg border-t border-r border-l border-gray-200 dark:border-sky-800"
                        style='background-image: url("{{ Vite::asset('resources/images/bazaar_thumb.jpg') }}");'>
                    </div>

                    <div class="p-5 prose">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ Str::title(__('custom.trading_posts')) }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify prose">
                            {{ __('custom.trading_post_card_description') }}
                        </p>
                    </div>

                </a>
            </div>

            {{--VILLAGES CARD--}}
            <div class="w-auto lg:w-full h-[650px] bg-indigo-50 border border-gray-200 dark:border-sky-800 rounded-lg shadow dark:bg-indigo-950 overflow-y-auto">
                <a href="#" class="hover:grayscale">
                    <div
                        class="w-auto lg:w-full h-1/2 bg-cover bg-center rounded-t-lg border-t border-r border-l border-gray-200 dark:border-sky-800"
                        style='background-image: url("{{ Vite::asset('resources/images/forest_village.jpg') }}");'>
                    </div>

                    <div class="p-5 prose">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ Str::title(__('custom.villages')) }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify prose">
                            {{ __('custom.villages_card_description') }}
                        </p>
                    </div>

                </a>
            </div>

            {{--TOWNS CARD--}}
            <div class="w-auto lg:w-full h-[650px] bg-indigo-50 border border-gray-200 dark:border-sky-800 rounded-lg shadow dark:bg-indigo-950 overflow-y-auto">
                <a href="#" class="hover:grayscale">
                    <div
                        class="w-auto lg:w-full h-1/2 bg-cover bg-center rounded-t-lg border-t border-r border-l border-gray-200 dark:border-sky-800"
                        style='background-image: url("{{ Vite::asset('resources/images/town_thumb.jpg') }}");'>
                    </div>

                    <div class="p-5 prose">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ Str::title(__('custom.towns')) }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify prose">
                            {{ __('custom.town_card_description') }}
                        </p>
                    </div>

                </a>
            </div>

            {{--CITIES CARD--}}
            <div class="w-auto lg:w-full h-[650px] bg-indigo-50 border border-gray-200 dark:border-sky-800 rounded-lg shadow dark:bg-indigo-950 overflow-y-auto">
                <a href="#" class="hover:grayscale">
                    <div
                        class="w-auto lg:w-full h-1/2 bg-cover bg-center rounded-t-lg border-t border-r border-l border-gray-200 dark:border-sky-800"
                        style='background-image: url("{{ Vite::asset('resources/images/city_thumb.jpg') }}");'>
                    </div>

                    <div class="p-5 prose">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ Str::title(__('custom.cities')) }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify prose">
                            {{ __('custom.city_card_description') }}
                        </p>
                    </div>

                </a>
            </div>

            {{--CAPITALS CARD--}}
            <div class="w-auto lg:w-full h-[650px] bg-indigo-50 border border-gray-200 dark:border-sky-800 rounded-lg shadow dark:bg-indigo-950 overflow-y-auto">
                <a href="#" class="hover:grayscale">
                    <div
                        class="w-auto lg:w-full h-1/2 bg-cover bg-center rounded-t-lg border-t border-r border-l border-gray-200 dark:border-sky-800"
                        style='background-image: url("{{ Vite::asset('resources/images/capital_thumb.jpg') }}");'>
                    </div>

                    <div class="p-5 prose">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ Str::title(__('custom.capitals')) }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify prose">
                            {{ __('custom.capital_card_description') }}
                        </p>
                    </div>

                </a>
            </div>

            {{--FORTRESSES CARD--}}
            <div class="w-auto lg:w-full h-[650px] bg-indigo-50 border border-gray-200 dark:border-sky-800 rounded-lg shadow dark:bg-indigo-950 overflow-y-auto">
                <a href="#" class="hover:grayscale">
                    <div
                        class="w-auto lg:w-full h-1/2 bg-cover bg-center rounded-t-lg border-t border-r border-l border-gray-200 dark:border-sky-800"
                        style='background-image: url("{{ Vite::asset('resources/images/fortress_thumb.jpg') }}");'>
                    </div>

                    <div class="p-5 prose">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ Str::title(__('custom.fortresses')) }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify prose">
                            {{ __('custom.fortress_card_description') }}
                        </p>
                    </div>

                </a>
            </div>

        </div>

    </section>

</main>

<footer class="relative bg-indigo-50 dark:bg-indigo-950 pt-8 pb-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl text-gray-700 dark:text-gray-100 font-semibold">Let's keep in touch!</h4>
                <h5 class="text-lg mt-0 mb-2 text-gray-700 dark:text-gray-100">
                    Find us on any of these platforms, we respond 1-2 business days.
                </h5>
                <div class="mt-6">
                    <button
                        class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                        type="button"
                    >
                        <i class="flex fab fa-twitter"></i></button
                    >
                    <button
                        class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                        type="button"
                    >
                        <i class="flex fab fa-facebook-square"></i></button
                    >
                    <button
                        class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                        type="button"
                    >
                        <i class="flex fab fa-dribbble"></i></button
                    >
                    <button
                        class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                        type="button"
                    >
                        <i class="flex fab fa-github"></i>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span
                    class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                >Useful Links</span
                >
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    class="text-gray-700 dark:text-gray-100 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://www.creative-tim.com/presentation"
                                >About Us</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 dark:text-gray-100 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://blog.creative-tim.com"
                                >Blog</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 dark:text-gray-100 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://www.github.com/creativetimofficial"
                                >Github</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 dark:text-gray-100 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://www.creative-tim.com/bootstrap-themes/free"
                                >Free Products</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                <span
                    class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                >Other Resources</span
                >
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    class="text-gray-700 dark:text-gray-100 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                                >MIT License</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 dark:text-gray-100 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://creative-tim.com/terms"
                                >Terms &amp; Conditions</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 dark:text-gray-100 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://creative-tim.com/privacy"
                                >Privacy Policy</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 dark:text-gray-100 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                    href="https://creative-tim.com/contact-us"
                                >Contact Us</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400 dark:border-gray-200"/>
        <div
            class="flex flex-wrap items-center md:justify-between justify-center"
        >
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    Copyright © 2019 Tailwind Starter Kit by
                    <a
                        href="https://www.creative-tim.com"
                        class="text-gray-700 dark:text-gray-100 hover:text-gray-900 dark:hover:text-gray-200"
                    >Creative Tim</a
                    >.
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>
</html>
