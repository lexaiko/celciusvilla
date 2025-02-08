<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen bg-zinc-100">

    <nav class="bg-zinc-900 border-gray-200 dark:bg-gray-900 sticky top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('storage/logo.png') }}" class="h-12" alt="Celcius Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">Celcius</span>
            </a>
            <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                <button type="button" data-dropdown-toggle="language-dropdown-menu"
                    class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-white dark:text-gray-900 rounded-lg cursor-pointer bg-orange-500 hover:bg-orange-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                        <path fill="#fff" d="M0 0h7410v3900H0z" />
                        <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#b22234"
                            stroke-width="300" />
                        <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                        <g fill="#b22234">
                            <g id="d">
                                <g id="c">
                                    <g id="e">
                                        <g id="b">
                                            <path id="a"
                                                d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                            <use xlink:href="#a" y="420" />
                                            <use xlink:href="#a" y="840" />
                                            <use xlink:href="#a" y="1260" />
                                        </g>
                                        <use xlink:href="#a" y="1680" />
                                    </g>
                                    <use xlink:href="#b" x="247" y="210" />
                                </g>
                                <use xlink:href="#c" x="494" />
                            </g>
                            <use xlink:href="#d" x="988" />
                            <use xlink:href="#c" x="1976" />
                            <use xlink:href="#e" x="2470" />
                        </g>
                    </svg>
                    English (US)
                </button>
                <!-- Dropdown -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                    id="language-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                                        xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                                        <g fill-rule="evenodd">
                                            <g stroke-width="1pt">
                                                <path fill="#bd3d44"
                                                    d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                    transform="scale(3.9385)" />
                                                <path fill="#fff"
                                                    d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                    transform="scale(3.9385)" />
                                            </g>
                                            <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                                transform="scale(3.9385)" />
                                        </g>
                                    </svg>
                                    English (US)
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                                        <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                        <path d="M0 0h512v170.7H0z" />
                                        <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                                    </svg>
                                    Deutsch
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                                        <g fill-rule="evenodd" stroke-width="1pt">
                                            <path fill="#fff" d="M0 0h512v512H0z" />
                                            <path fill="#009246" d="M0 0h170.7v512H0z" />
                                            <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                        </g>
                                    </svg>
                                    Italiano
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        id="flag-icon-css-cn" viewBox="0 0 512 512">
                                        <defs>
                                            <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                        </defs>
                                        <path fill="#de2910" d="M0 0h512v512H0z" />
                                        <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                            xlink:href="#a" />
                                        <use width="30" height="20"
                                            transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                                        <use width="30" height="20"
                                            transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a" />
                                        <use width="30" height="20"
                                            transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                                        <use width="30" height="20"
                                            transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
                                    </svg>
                                    中文 (繁體)
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-language" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-language" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-zinc-900 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-zinc-900 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-orange-500 bg-zinc-900 rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-white md:dark:hover:text-orange-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-white rounded hover:bg-zinc-900 hover:text-orange-500 md:hover:bg-transparent md:hover:text-orange-500 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Room</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-white rounded hover:bg-zinc-900 hover:text-orange-500 md:hover:bg-transparent md:hover:text-orange-500 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-white rounded hover:bg-zinc-900 hover:text-orange-500 md:hover:bg-transparent md:hover:text-orange-500 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Gallery</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-white rounded hover:bg-zinc-900 hover:text-orange-500 md:hover:bg-transparent md:hover:text-orange-500 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="jumbotron w-full h-2/3 md:h-screen">
        <div id="default-carousel" class="relative w-full h-full" data-carousel="slide"
            data-carousel-interval="5000">
            <!-- Carousel wrapper -->
            <div class="relative w-full h-full overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/cafe.jpg') }}"
                        class="absolute block w-full h-full object-cover" alt="...">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-black/50 text-white text-center p-4">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di Celcius Villa</h1>
                        <p class="text-lg md:text-xl">Nikmati suasana alam yang tenang dan jauh dari hiruk pikuk
                            kota.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/v.jpg') }}"
                        class="absolute block w-full h-full object-cover" alt="...">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-black/50 text-white text-center p-4">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">Kamar Mewah</h1>
                        <p class="text-lg md:text-xl">Nikmati fasilitas modern dengan kenyamanan maksimal untuk
                            Anda dan keluarga.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/kamar.jpg') }}"
                        class="absolute block w-full h-full object-cover" alt="...">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-black/50 text-white text-center p-4">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">Kamar Elegan</h1>
                        <p class="text-lg md:text-xl">Rasakan kesegaran alam dengan kamar eksklusif kami.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="false"
                    aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="false"
                    aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 focus:ring-4 focus:ring-white">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 focus:ring-4 focus:ring-white">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </button>
        </div>
    </section>

    <main class="container mx-auto">
        <section class="py-16">
                <!-- Heading dan Deskripsi -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Fasilitas Kami</h2>
                    <p class="text-gray-600 mt-4">
                        Celcius Villa Camp & Cafe menyediakan berbagai fasilitas modern untuk memastikan pengalaman menginap Anda nyaman dan tak terlupakan.
                    </p>
                </div>

                <!-- Cards with Animation -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <!-- Wi-Fi -->
                    <div class="bg-white rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:scale-105">
                        <div class="flex items-center">
                            <img src="https://img.icons8.com/fluency/48/000000/wifi.png" alt="Wi-Fi" class="mr-4">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 text-left">Wi-Fi Cepat</h3>
                        <p class="text-gray-500 mt-2 text-left">Akses internet gratis dan cepat di seluruh area villa.</p>
                    </div>
                    <!-- AC -->
                    <div class="bg-white rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:scale-105">
                        <div class="flex items-center">
                            <img src="https://img.icons8.com/fluency/48/000000/air-conditioner.png" alt="AC" class="mr-4">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 text-left">AC Dingin</h3>
                        <p class="text-gray-500 mt-2 text-left">Setiap kamar dilengkapi AC untuk kenyamanan Anda.</p>
                    </div>
                    <!-- Camping Area -->
                    <div class="bg-white rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:scale-105">
                        <div class="flex items-center">
                            <img src="https://img.icons8.com/fluency/48/000000/tent.png" alt="Camping Area" class="mr-4">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 text-left">Camping Area</h3>
                        <p class="text-gray-500 mt-2 text-left">
                            Nikmati malam di bawah bintang dengan tenda nyaman dan fasilitas lengkap.
                        </p>
                    </div>
                    <!-- Coffee Shop -->
                    <div class="bg-white rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:scale-105">
                        <div class="flex items-center">
                            <img src="https://img.icons8.com/fluency/48/000000/coffee-to-go.png" alt="Coffee Shop" class="mr-4">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 text-left">Coffee Shop</h3>
                        <p class="text-gray-500 mt-2 text-left">Nikmati kopi segar dan suasana santai di cafe kami.</p>
                    </div>
                </div>
        </section>

        <section class="">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="col-span-1 order-last sm:order-first">
                    <img class=" w-full object-cover rounded-lg aspect-square" src="{{ asset('storage/vila.jpg') }}" alt="">
                </div>
                <div class="rounded-lg p-6 flex items-center justify-center order-first sm:order-last">
                    <div class="text-left">
                        <h3 class="text-3xl md:text-5xl font-semibold py-3 text-gray-700">Jadikan Liburan Anda Berkesan dan Aman Bersama Kami</h3>
                        <p class="text-lg md:text-xl text-gray-500 py-3">Selamat datang di Grand Watudodol.
                            Selamat menikmati keindahan pantai pohon kelapa, dan hamparan pasir hitam, keindahan Pulau Tabuhan, serta destinasi lainnya. Dan kami siap menemani liburan Anda di Watudodol. Jadikan liburan Anda berkesan bersama kami.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16">
            <!-- Heading dan Deskripsi -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Tipe Kamar</h2>
                <p class="text-gray-600 mx-5 mt-4">
                    Kami di Celcius Villa Camp & Cafe memiliki berbagai pilihan tipe kamar yang dapat disesuaikan dengan kebutuhan Anda. Baik untuk liburan keluarga, pasangan, maupun penginapan dalam kelompok, setiap kamar kami dirancang untuk memberikan kenyamanan dan pengalaman tak terlupakan. Temukan tipe kamar yang paling sesuai dengan Anda!
                </p>
            </div>

            <!-- Cards -->
            <div class="overflow-x-auto">
                <div class="flex flex-nowrap gap-8 justify-items-center">
                    <!-- Tipe Kamar Family Room -->
                    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-sm md:max-w-md lg:max-w-lg transform transition-transform hover:scale-105 duration-300 ease-in-out">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/vila.jpg') }}" alt="Family Room" class="mr-4 w-full h-40 object-cover rounded-lg">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 text-left">Family Room</h3>
                        <p class="text-gray-500 mt-2 text-left">
                            Family Room dirancang untuk kenyamanan keluarga dengan ruang yang luas. Dilengkapi dengan:
                            <ul class="list-disc ml-4">
                                <li>Nama Kamar: Deluxe Family Suite</li>
                                <li>Deskripsi: Kamar luas dengan pemandangan laut</li>
                                <li>Fasilitas: Wi-Fi, AC, TV, Mini Bar</li>
                                <li>Harga: Rp. 1.500.000</li>
                                <li>Kapasitas: 4 orang</li>
                                <li>Status: Tersedia</li>
                            </ul>
                            untuk memastikan pengalaman menginap yang menyenangkan bagi setiap anggota keluarga.
                        </p>
                    </div>
                    <!-- Tipe Kamar Dormitory Room -->
                    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-sm md:max-w-md lg:max-w-lg transform transition-transform hover:scale-105 duration-300 ease-in-out">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/vila.jpg') }}" alt="Dormitory Room" class="mr-4 w-full h-40 object-cover rounded-lg">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 text-left">Dormitory Room</h3>
                        <p class="text-gray-500 mt-2 text-left">
                            Family Room dirancang untuk kenyamanan keluarga dengan ruang yang luas. Dilengkapi dengan:
                            <ul class="list-disc ml-4">
                                <li>Nama Kamar: Deluxe Family Suite</li>
                                <li>Deskripsi: Kamar luas dengan pemandangan laut</li>
                                <li>Fasilitas: Wi-Fi, AC, TV, Mini Bar</li>
                                <li>Harga: Rp. 1.500.000</li>
                                <li>Kapasitas: 4 orang</li>
                                <li>Status: Tersedia</li>
                            </ul>
                            untuk memastikan pengalaman menginap yang menyenangkan bagi setiap anggota keluarga.
                        </p>
                    </div>
                    <!-- Tipe Kamar Dormitory Room -->
                    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-sm md:max-w-md lg:max-w-lg transform transition-transform hover:scale-105 duration-300 ease-in-out">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/vila.jpg') }}" alt="Dormitory Room" class="mr-4 w-full h-40 object-cover rounded-lg">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 text-left">Dormitory Room</h3>
                        <p class="text-gray-500 mt-2 text-left">
                            Family Room dirancang untuk kenyamanan keluarga dengan ruang yang luas. Dilengkapi dengan:
                            <ul class="list-disc ml-4">
                                <li>Nama Kamar: Deluxe Family Suite</li>
                                <li>Deskripsi: Kamar luas dengan pemandangan laut</li>
                                <li>Fasilitas: Wi-Fi, AC, TV, Mini Bar</li>
                                <li>Harga: Rp. 1.500.000</li>
                                <li>Kapasitas: 4 orang</li>
                                <li>Status: Tersedia</li>
                            </ul>
                            untuk memastikan pengalaman menginap yang menyenangkan bagi setiap anggota keluarga.
                        </p>
                    </div>
                </div>
            </div>
        </section>
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6 sm:px-12 lg:px-16">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Destinasi Menarik di Sekitar Vila</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Pantai Boom -->
            <div class="bg-white rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('storage/vila.jpg') }}" alt="Pantai Boom" class="mb-4 w-full h-40 object-cover rounded-t-lg">
                <h3 class="text-xl font-semibold text-gray-700">Pantai Boom</h3>
                <p class="text-gray-500 mt-2">Nikmati keindahan matahari terbit di Pantai Boom, tempat sempurna untuk bersantai dan menikmati suasana laut.</p>
            </div>
            <!-- Taman Nasional Baluran -->
            <div class="bg-white rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('storage/vila.jpg') }}" alt="Taman Nasional Baluran" class="mb-4 w-full h-40 object-cover rounded-t-lg">
                <h3 class="text-xl font-semibold text-gray-700">Taman Nasional Baluran</h3>
                <p class="text-gray-500 mt-2">Jelajahi Taman Nasional Baluran yang dikenal sebagai 'Little Africa' dengan savana yang luas dan satwa liar yang beragam.</p>
            </div>
            <!-- Kawah Ijen -->
            <div class="bg-white rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('storage/vila.jpg') }}" alt="Kawah Ijen" class="mb-4 w-full h-40 object-cover rounded-t-lg">
                <h3 class="text-xl font-semibold text-gray-700">Kawah Ijen</h3>
                <p class="text-gray-500 mt-2">Saksikan fenomena api biru yang memukau dan nikmati pemandangan spektakuler dari puncak Kawah Ijen.</p>
            </div>
        </div>
    </div>
</section>



        <section class="bg-white py-12">
            <div class="container mx-auto px-6 sm:px-12 lg:px-16">
                <h2 class="text-3xl font-semibold text-gray-700 text-center">Testimoni</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                    <div class="flex flex-col items-center bg-white rounded-lg shadow-lg p-6">
                        <img src="{{ asset('storage/vila.jpg') }}" alt="User 1" class="w-20 h-20 rounded-full mb-4">
                        <p class="text-gray-500 text-center">"Villa ini sangat nyaman dan bersih, pemandangannya juga sangat indah."</p>
                        <p class="text-gray-700 font-semibold text-center">- Rizky</p>
                    </div>
                    <div class="flex flex-col items-center bg-white rounded-lg shadow-lg p-6">
                        <img src="{{ asset('storage/vila.jpg') }}" alt="User 2" class="w-20 h-20 rounded-full mb-4">
                        <p class="text-gray-500 text-center">"Pelayanan yang diberikan sangat ramah dan profesional."</p>
                        <p class="text-gray-700 font-semibold text-center">- Erika</p>
                    </div>
                    <div class="flex flex-col items-center bg-white rounded-lg shadow-lg p-6">
                        <img src="{{ asset('storage/vila.jpg') }}" alt="User 3" class="w-20 h-20 rounded-full mb-4">
                        <p class="text-gray-500 text-center">"Kamar yang disediakan sangat nyaman dan bersih."</p>
                        <p class="text-gray-700 font-semibold text-center">- Adit</p>
                    </div>
                </div>
            </div>
        </section>




        <section class=" py-12">
            <div class="container mx-auto px-6 sm:px-12 lg:px-16">
                <div class="flex flex-col lg:flex-row items-center gap-8">
                    <!-- Kolom Video -->
                    <div class="w-full lg:w-1/2">
                        <div class="aspect-w-16 aspect-h-9 rounded-lg shadow-lg overflow-hidden">
                            {{-- <iframe class="border rounded-lg w-full h-[360px]"
                                src="https://www.youtube.com/embed/0E4aRguHzDE" frameborder="0"
                                allowfullscreen></iframe> --}}
                                <iframe class="border rounded-lg w-full h-[360px]" width="100%" height="315"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.808412842392!2d114.31005479999999!3d-8.222013099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd151d94a959e47%3A0xdc1d0297aeccd64c!2sCelcius%20Villa%20Camp%20%26%20Cafe!5e0!3m2!1sid!2sid!4v1738317927292!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <!-- Kolom About Us -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Selamat datang di <strong>Celcius Villa Camp & Cafe</strong>, tempat di mana keindahan alam
                            dan kenyamanan modern berpadu sempurna. Kami menawarkan pengalaman unik menginap di villa
                            eksklusif, area berkemah yang asri, dan kafe dengan suasana yang menyenangkan.
                        </p>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Celcius Villa Camp & Cafe dirancang untuk menghadirkan momen-momen terbaik bagi para tamu
                            kami, baik untuk liburan keluarga, perjalanan romantis, atau sekadar bersantai dengan
                            teman-teman. Dengan pelayanan yang ramah dan fasilitas yang lengkap, kami memastikan setiap
                            kunjungan menjadi pengalaman tak terlupakan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>





    <footer class="bg-white dark:bg-gray-900 mb-5">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Discord Server</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Licensing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">iOS</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Android</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Windows</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">MacOS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline ">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>

</body>

</html>
