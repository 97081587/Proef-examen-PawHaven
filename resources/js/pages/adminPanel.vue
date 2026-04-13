<script setup>
import HeaderAdmin from "../layouts/headerAdmin.vue";
// import axios from "axios";
</script>

<template>
    <div
        class="w-full h-screen bg-cover bg-center relative"
        style="background-image: url(&quot;/img/backgroundImage.jpg&quot;)"
    >
        <!-- Transparent layer-->
        <div class="absolute inset-0 bg-red-500/25"></div>

        <!-- Content-->
        <div class="relative z-10 h-full flex flex-col text-white">
            <HeaderAdmin />
        </div>
    </div>
</template>
