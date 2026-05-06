<script setup>
import HeaderAdmin from "../layouts/headerAdmin.vue";
import KlantenAdminComp from "../components/klantenAdminComp.vue";
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
                    <div class="flex flex-row justify-between px-30 py-5">
                        <p>Voornaam</p>
                        <p>Achternaam</p>
                        <p>E-mail</p>
                        <p>Telefoonnummer</p>
                        <p>Acties</p>
                    </div>
                    <hr class="border-t border-white/100" />
                    <!-- hier komen alle klanten in een loop -->
                    <KlantenAdminComp /> 
                </div>
            </div>
        </div>
    </div>
</template>
