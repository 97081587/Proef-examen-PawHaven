<script setup>
import { Inertia } from '@inertiajs/inertia'
import { usePage } from '@inertiajs/inertia-vue3'

const page = usePage()

// console.log(page.props)

const logOut = () => {
  Inertia.post('/api/logout')
}

</script>

<template>
    <!-- Header -->
    <div class="flex justify-between items-center px-12 py-8">
        <h1 class="text-4xl font-delius"><a href="/">PawHaven</a></h1>
        <p class="text-xs text-yellow-300 text-left">Admin panel</p>
        <div class="text-right">
            <p class="cursor-pointer hover:underline" @click="logOut">Uitloggen</p>
        </div>
    </div>

    <!-- white line -->
    <hr class="border-t border-white/40" />
</template>
