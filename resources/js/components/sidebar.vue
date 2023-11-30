<script setup>
import {ref} from 'vue';
import Content from "./content.vue";

const isOpen = ref(false);
const isActive = ref(false);
const activeClick = () => {
    isActive.value = !isActive.value;
}
</script>

<template>
    <!--Start Sidebar-->
    <div class="flex h-screen 2xl:bg-gray-200">
        <div
            class="p-5 bg-gray-800 w-64 fixed inset-y-0 left-0 transform -translate-x-full 2xl:translate-x-0 sm:mt-12 md:mt-12 2xl:transition-transform duration-200 ease-in-out 2xl:ease-none overflow-auto 2xl:overflow-visible 2xl:rounded-r-md"
            :class="{'translate-x-0 ease-out w-full': isOpen}">
            <div>
                <input type="text" placeholder="Press F to search"
                       class="border border-black focus:outline-none focus:ring-2 focus:ring-gray-700 duration-300 text-white transition-all rounded-md px-2 py-2 bg-gray-800 sm:w-full md:w-full">
            </div>
            <p class="text-white mt-5">Your Music</p>
            <ul class="mt-5 space-y-2">
                <li>
                    <a href="#" @click="activeClick"
                       :class="{'before:absolute before:w-4 before:h-4 before:rounded-md before:bg-orange-200 before:-right-1 before:mr-1': isActive}"
                       class="duration-150 hover:text-indigo-500 rounded p-3 text-white block w-full"
                    >One</a
                    >
                </li>
                <li>
                    <a href="#"
                       class="transition-all duration-150 hover:text-indigo-500 rounded p-3 text-white block"
                    >Two</a
                    >
                </li>
                <li>
                    <a href="#"
                       class="transition-all duration-150 hover:text-indigo-500 rounded p-3 text-white block"
                    >Three</a
                    >
                </li>
                <li>
                    <a href="#"
                       class="transition-all duration-150 hover:text-indigo-500 rounded p-3 text-white block"
                    >Four</a
                    >
                </li>
                <li>
                    <a href="#"
                       class="transition-all duration-150 hover:text-indigo-500 rounded p-3 text-white block"
                    >Five</a
                    >
                </li>
            </ul>
        </div>
        <!--End Sidebar-->

        <!--Start Sidebar-->
        <div
            class="flex h-screen bg-gray-white 2xl:bg-gray-200 xl:flex-col-reverse lg:flex-col-reverse md:flex-col-reverse sm:flex-col-reverse -mt-24">
            <div
                class="p-5 bg-gray-800 w-12 2xl:rounded-l-md fixed h-screen right-0 2xl:rounded-r-md md:top-0 md:right-auto md:w-full md:h-12 sm:top-0 sm:right-auto sm:w-full sm:h-12">
                <div class="">
                    <button @click="isOpen = !isOpen"
                            class="2xl:hidden mb-2 sm:h-12 md:h-12 lg:hidden xl:hidden text-white -mt-12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="h-8 w-8 rounded z-50">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col h-full justify-end items-center sm:hidden md:hidden">
                    <ul class="text-white space-y-8">
                        <li class="hover:bg-gray-200 hover:rounded-full transition-all duration-200">
                            <a href="#" class="hover:text-black transition-all duration-200">
                                <svg class="svg-inline--fa fa-circle-info h-8 w-8" aria-hidden="true" focusable="false"
                                     data-prefix="fas" data-icon="circle-info" role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-v-1fb165af="">
                                    <path class="" fill="currentColor"
                                          d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-144c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="hover:bg-gray-200 hover:rounded-full transition-all duration-200">
                            <a href="#" class="hover:text-black transition-all duration-200">
                                <svg class="svg-inline--fa fa-arrow-right-from-bracket" aria-hidden="true"
                                     focusable="false" data-prefix="fas" data-icon="arrow-right-from-bracket" role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-v-1fb165af="">
                                    <path class="" fill="currentColor"
                                          d="M534.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L434.7 224 224 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM192 96c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-53 0-96 43-96 96l0 256c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="hover:bg-gray-200 hover:rounded-full transition-all duration-200">
                            <a href="#" class="hover:text-black transition-all duration-200">
                                <img alt="Avatar of Koel"
                                     src="https://www.gravatar.com/avatar/819d10ab8d9d8d86dbe24cdb0bbd7d24?s=192&amp;d=robohash"
                                     data-v-39881364="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Sidebar-->

        <!--Start Content-->
        <div class="flex-1 p-5 bg-gray-900">
            <content/>
        </div>
        <!--End Content-->

        <!--Start Bottom Navigation-->
        <div class="fixed bottom-0 left-0 z-50 w-full h-24 bg-gray-700 dark:bg-gray-700 dark:border-gray-600 shadow-xl text-white">
            <div class="grid h-full w-full grid-cols-3 font-medium">
                <div class="flex-1 p-5 flex items-center">
                    <img src="https://tailwindcss.com/_next/static/media/full-stack-radio.afb14e4e.png" loading="lazy" decoding="async" alt="" class="flex-none rounded-lg bg-slate-100" width="65" height="65">
                </div>
                <div class="flex-1 p-5 flex justify-center items-center space-x-10">
                    <button type="button" class="" aria-label="Previous">
                        <svg width="24" height="24" fill="none">
                            <path d="m10 12 8-6v12l-8-6Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6 6v12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <button type="button" aria-label="Rewind 10 seconds">
                        <svg width="24" height="24" fill="none">
                            <path d="M6.492 16.95c2.861 2.733 7.5 2.733 10.362 0 2.861-2.734 2.861-7.166 0-9.9-2.862-2.733-7.501-2.733-10.362 0A7.096 7.096 0 0 0 5.5 8.226" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 5v3.111c0 .491.398.889.889.889H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <button type="button" class="bg-white text-slate-900 transition-all duration-500 dark:bg-slate-100 dark:text-slate-700 flex-none -my-2 w-20 h-20 rounded-full ring-1 ring-slate-900/5 shadow-md flex items-center justify-center" aria-label="Pause">
                        <svg width="30" height="32" fill="currentColor">
                            <rect x="6" y="4" width="4" height="24" rx="2"></rect>
                            <rect x="20" y="4" width="4" height="24" rx="2"></rect>
                        </svg>
                    </button>

                    <button type="button" aria-label="Skip 10 seconds" class="">
                        <svg width="24" height="24" fill="none">
                            <path d="M17.509 16.95c-2.862 2.733-7.501 2.733-10.363 0-2.861-2.734-2.861-7.166 0-9.9 2.862-2.733 7.501-2.733 10.363 0 .38.365.711.759.991 1.176" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19 5v3.111c0 .491-.398.889-.889.889H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <button type="button" class="" aria-label="Next">
                        <svg width="24" height="24" fill="none">
                            <path d="M14 12 6 6v12l8-6Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M18 6v12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 p-5 flex justify-end items-center">

                </div>
            </div>
        </div>
        <!--End Bottom Navigation-->
    </div>
</template>

<style scoped>

</style>
