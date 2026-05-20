<script setup></script>

<template>
    <div
        class="absolute z-10 rounded-[41px] border border-white bg-white/20 w-[1200px] h-[547px] backdrop-blur-[30px]"
    >
        <div class="flex flex-col items-center justify-center h-full text-white">
            <h2 class="text-2xl font-bold mb-4">Huisdiergegevens</h2>
            <p class="text-lg mb-2">Naam: {{ name }}</p>
             <p class="text-lg mb-2">Leeftijd: {{ age }}</p>
            <p class="text-lg mb-2">Soort: {{ species }}</p>
            <p class="text-lg mb-2">Ras: {{ breed }}</p>
        </div>
    </div>
</template>
