<script setup>
import {ref} from 'vue';

const isOpen = ref(false);
</script>

<template>
    <!--Start Sidebar-->
    <div class="flex h-screen bg-gray-white 2xl:bg-gray-200 md:flex-col sm:flex-col">
        <div
            class="p-5 bg-gray-900 w-12 rounded-l-md fixed inset-y-0 right-0 rounded-r-md md:top-0 md:right-auto md:w-full md:h-12 md:rounded-b-md sm:rounded-b-md sm:top-0 sm:right-auto sm:w-full sm:h-12">
            <div class="z-10">
                <button @click="isOpen = !isOpen" class="2xl:hidden mb-2 sm:h-12 md:h-12">
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
</template>
<style scoped>

</style>
