<script setup>
import {usePage} from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

// const { auth } = usePage().props
// const klantnummer = auth.user?.klantnummer

const klantnummer = usePage().props.auth?.user?.klantnummer ?? 'N/A'

const logOut = () => {
  Inertia.post('/logout')
}

defineProps({
  klantnummer: {
    type: String,
    required: true
  }
})

</script>

<template>
    <!-- Header -->
    <div class="flex justify-between items-center px-12 py-8">
        <h1 class="text-4xl font-delius"><a href="/">PawHaven</a></h1>

        <div class="text-right">
            <p class="cursor-pointer hover:underline" @click="logOut">Uitloggen</p>
            <p class="text-sm mt-1">Mijn klantennummer: {{ klantnummer}}</p>
        </div>
    </div>

    <!-- خط أبيض / white line-->
    <hr class="border-t border-white/40" />
</template>
