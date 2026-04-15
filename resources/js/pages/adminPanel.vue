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
        <div class="absolute inset-0 bg-red-600/25"></div>

        <!-- Content-->
        <div class="relative z-10 h-full flex flex-col text-white">
            <HeaderAdmin />
            <div class="flex justify-center top-20 relative">
                <div
                    class="absolute z-10 rounded-[41px] border border-white bg-white/20 w-[1200px] h-[547px] backdrop-blur-[30px]"
                >
          
                </div>
            </div>
        </div>
    </div>
</template>
