<script setup>
import Header from "../layouts/header.vue";
import huisdierComp from "../components/huisdierComp.vue";
defineProps({
    huisdieren: Array,
});
</script>

<template>
    <div
        class="w-full h-screen bg-cover bg-center relative"
        style="background-image: url(&quot;/img/backgroundImage.jpg&quot;)"
    >
        <!--Transparent layer-->
        <div class="absolute inset-0 bg-black/25"></div>

        <!--Content-->
        <div class="relative z-10 h-full flex flex-col text-white">
            <!-- Header -->
            <Header />
            <div class="flex justify-center top-20 relative">
                <div
                    class="absolute z-10 rounded-[41px] border border-white bg-white/20 w-[1200px] h-[547px] backdrop-blur-[30px]"
                >
                    <huisdierComp
                        v-for="huisdier in huisdieren"
                        :key="huisdier.id"
                        :name="huisdier.name"
                        :species="huisdier.species"
                        :breed="huisdier.breed"
                        :age="huisdier.age"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
