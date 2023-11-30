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
            class="p-5 bg-gray-900 w-64 fixed inset-y-0 left-0 transform -translate-x-full 2xl:translate-x-0 sm:mt-12 md:mt-12 2xl:transition-transform duration-200 ease-in-out 2xl:ease-none overflow-auto 2xl:overflow-visible rounded-r-md"
            :class="{'translate-x-0 ease-out w-full': isOpen}">
            <div>
                <input type="text" placeholder="Press F to search"
                       class="border border-black focus:outline-none focus:ring-2 focus:ring-gray-700 duration-300 text-white transition-all rounded-md px-2 py-2 bg-gray-800">
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
        <div class="flex h-screen bg-gray-white 2xl:bg-gray-200 md:flex-col sm:flex-col">
            <div
                class="p-5 bg-gray-900 w-12 rounded-l-md fixed inset-y-0 right-0 2xl:rounded-r-md md:top-0 md:right-auto md:w-full md:h-12 sm:top-0 sm:right-auto sm:w-full sm:h-12">
                <div class="">
                    <button @click="isOpen = !isOpen" class="2xl:hidden mb-2 sm:h-12 md:h-12 text-white -mt-12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="h-8 w-8 rounded z-50">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!--End Sidebar-->

        <!--Start Content-->
        <div class="flex-1 p-5">
            <content/>
        </div>
        <!--End Content-->
    </div>
</template>

<style scoped>

</style>
