<script setup>
import Header from "../layouts/header.vue";
import axios from "axios";
</script>

<template>
    <div
        class="w-full h-screen bg-cover bg-center relative"
        style="background-image: url(&quot;/img/backgroundImage.jpg&quot;)"
    >
        <!-- طبقة شفافة / Transparent layer-->
        <div class="absolute inset-0 bg-black/25"></div>

        <!-- المحتوى / Content-->
        <div class="relative z-10 h-full flex flex-col text-white">
    <Header />
            </div>
        </div>
</template>