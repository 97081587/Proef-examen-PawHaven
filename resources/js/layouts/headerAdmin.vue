<script setup>
import { Inertia } from "@inertiajs/inertia";
import { usePage } from "@inertiajs/inertia-vue3";

const page = usePage();

// console.log(page.props)

const logOut = () => {
    Inertia.post("/api/logout");
};
</script>

<template>
    <!-- Header -->
    <div class="flex justify-between items-center px-12 py-8">
        <div>
            <p class="text-sm text-yellow-400 text-right">Admin panel</p>
            <h1 class="text-4xl font-delius"><a href="/admin">PawHaven</a></h1>
        </div>
        <div class="text-right">
            <p class="cursor-pointer hover:underline" @click="logOut">
                Uitloggen
            </p>
        </div>
    </div>

    <!-- white line -->
    <hr class="border-t border-white/40" />
</template>
