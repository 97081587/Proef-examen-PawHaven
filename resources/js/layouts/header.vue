<script setup>
import { Inertia } from '@inertiajs/inertia'
import { usePage } from '@inertiajs/inertia-vue3'

const page = usePage()

console.log(page.props)

    // const user = page.props.auth?.user
const klantnummer = page.props.auth.user?.klantnummer ?? 'Geen klantnummer!'

const logOut = () => {
  Inertia.post('/logout')
}

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
