<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-screen flex">
        <div
            class="p-5 bg-gray-800 w-64 left-0 transform -translate-x-full 2xl:translate-x-0 sm:mt-12 md:mt-12 2xl:transition-transform duration-200 ease-in-out 2xl:ease-none overflow-auto 2xl:overflow-visible 2xl:rounded-r-md"
            :class="{'translate-x-0 ease-out w-full': isOpen}">
            <div>
                <input type="text" placeholder="Press F to search"
                       class="border border-black focus:outline-none focus:ring-2 focus:ring-gray-700 duration-300 text-white transition-all rounded-md px-2 py-2 bg-gray-800 sm:w-full md:w-full">
            </div>
            <p class="text-white mt-5">Your Music</p>
            <ul class="mt-5 space-y-1 text-sm">
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" @click="setActive('Home')"
                       :class="{'before:absolute before:w-4 before:h-4 before:rounded-md before:bg-orange-200 before:-right-1 before:mr-1': activeItem === 'Home'}"
                       class="p-3 text-white w-full flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="h-5 w-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" @click="setActive('Current Queue')"
                       :class="{'before:absolute before:w-4 before:h-4 before:rounded-md before:bg-orange-200 before:-right-1 before:mr-1': activeItem === 'Current Queue'}"
                       class="p-3 text-white flex w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="h-5 w-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        Current Queue
                    </a>
                </li>
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" @click="setActive('All Songs')"
                       :class="{ 'before:absolute before:w-4 before:h-4 before:rounded-md before:bg-orange-200 before:-right-1 before:mr-1': activeItem === 'All Songs' }"
                       class="p-3 text-white flex w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                  d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7v72V368c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V147L192 223.8V432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V200 128c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z"/>
                        </svg>

                        All Songs
                    </a>
                </li>
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" @click="setActive('Albums')"
                       :class="{ 'before:absolute before:w-4 before:h-4 before:rounded-md before:bg-orange-200 before:-right-1 before:mr-1': activeItem === 'Albums' }"
                       class="p-3 text-white flex w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                  d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 32a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm-96-32a96 96 0 1 0 192 0 96 96 0 1 0 -192 0zM96 240c0-35 17.5-71.1 45.2-98.8S205 96 240 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-45.4 0-89.2 22.3-121.5 54.5S64 194.6 64 240c0 8.8 7.2 16 16 16s16-7.2 16-16z"/>
                        </svg>
                        Albums
                    </a>
                </li>
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" @click="setActive('Artist')"
                       :class="{ 'before:absolute before:w-4 before:h-4 before:rounded-md before:bg-orange-200 before:-right-1 before:mr-1': activeItem === 'Artist' }"
                       class="p-3 text-white flex w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 384 512">
                            <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                  d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z"/>
                        </svg>
                        Artist
                    </a>
                </li>
            </ul>
            <p class="text-white mt-5">Playlists</p>
            <ul class="mt-5 space-y-1 text-sm">
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" class="p-3 text-white flex w-full" @click="setActive('Favourites')"
                       :class="{ 'before:absolute before:w-4 before:h-4 before:rounded-md before:bg-orange-200 before:-right-1 before:mr-1': activeItem === 'Favourites' }"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="h-5 w-5 mr-1 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        Favourites
                    </a>
                </li>
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" class="p-3 text-white flex w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                  d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z"/>
                        </svg>
                        Recently Played
                    </a>
                </li>
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" class="p-3 text-white flex w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 " viewBox="0 0 576 512">
                            <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                  d="M234.7 42.7L197 56.8c-3 1.1-5 4-5 7.2s2 6.1 5 7.2l37.7 14.1L248.8 123c1.1 3 4 5 7.2 5s6.1-2 7.2-5l14.1-37.7L315 71.2c3-1.1 5-4 5-7.2s-2-6.1-5-7.2L277.3 42.7 263.2 5c-1.1-3-4-5-7.2-5s-6.1 2-7.2 5L234.7 42.7zM46.1 395.4c-18.7 18.7-18.7 49.1 0 67.9l34.6 34.6c18.7 18.7 49.1 18.7 67.9 0L529.9 116.5c18.7-18.7 18.7-49.1 0-67.9L495.3 14.1c-18.7-18.7-49.1-18.7-67.9 0L46.1 395.4zM484.6 82.6l-105 105-23.3-23.3 105-105 23.3 23.3zM7.5 117.2C3 118.9 0 123.2 0 128s3 9.1 7.5 10.8L64 160l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L128 160l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L128 96 106.8 39.5C105.1 35 100.8 32 96 32s-9.1 3-10.8 7.5L64 96 7.5 117.2zm352 256c-4.5 1.7-7.5 6-7.5 10.8s3 9.1 7.5 10.8L416 416l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L480 416l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L480 352l-21.2-56.5c-1.7-4.5-6-7.5-10.8-7.5s-9.1 3-10.8 7.5L416 352l-56.5 21.2z"/>
                        </svg>
                        Test
                    </a>
                </li>
                <li class="hover:bg-indigo-500 transition-all duration-150 ease-in-out rounded">
                    <a href="#" class="p-3 text-white flex w-full">
                        More
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-1">
            <h1 class="text-red-500">Hello</h1>
        </div>
    </div>
</body>
</html>
