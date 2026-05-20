<script setup>
import { ref } from "vue";
import axios from "axios";

const props = defineProps({
    name: String,
    species: String,
    breed: String,
    age: Number,
});
</script>

<template>
    <div
        class="absolute rounded-[41px] border border-white bg-white/20 w-[12px] h-[57px] backdrop-blur-[30px]"
    >
        <div class="flex flex-col items-center justify-center h-full text-white">
            <h2 class="text-2xl font-bold mb-4">Huisdiergegevens</h2>
            <p class="text-lg mb-2">Naam: {{ name }}</p>
             <p class="text-lg mb-2">Leeftijd: {{ age }}</p>
            <p class="text-lg mb-2">Soort: {{ species }}</p>
            <p class="text-lg mb-2">Ras: {{ breed }}</p>
            <button class="mt-4 rounded-[41px] border border-white bg-white/20 w-[100px] h-[40px]">
                Bewerken
            </button>
        </div>
    </div>
</template>
