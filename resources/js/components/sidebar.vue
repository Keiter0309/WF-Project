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
    <div class="bg-gray-200">
        <button @click="isOpen = !isOpen" class="desktop:hidden text-white mb-2 bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 class="h-8 w-8 rounded">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <div class="flex h-screen desktop:bg-gray-200">
        <div
            class="p-5 bg-gray-900 w-64 fixed inset-y-0 left-0 transform -translate-x-full desktop:translate-x-0 desktop:transition-transform duration-200 ease-in-out desktop:ease-none overflow-auto desktop:overflow-visible rounded-r-md"
            :class="{'translate-x-0 ease-out w-full': isOpen}">
            <div class="float-right">
                <svg @click="isOpen = !isOpen"
                     class="h-8 w-8 text-white cursor-pointer hover:text-red-500 transition-all duration-150 desktop:hidden"
                     fill="none"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
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

        <!--Start Content-->
        <div class="flex-1 p-5">
            <content/>
        </div>
        <!--End Content-->
    </div>
</template>

<style scoped>

</style>
