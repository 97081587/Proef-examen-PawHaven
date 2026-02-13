<script setup>
import logo from "../components/logo.vue";
</script>

<template>
    <div class="w-full h-full">
        <!-- achtergrond afbeelding en logo -->
        <div
            :style="{ backgroundImage: `url('/img/backgroundImage.jpg')` }"
            class="w-full h-screen bg-cover bg-center relative"
        >
            <!-- achtergrond verduistering -->
            <div class="absolute inset-0 bg-black/25"></div>
            <logo />

            <!-- log in formulier -->
        </div>
    </div>
</template>
