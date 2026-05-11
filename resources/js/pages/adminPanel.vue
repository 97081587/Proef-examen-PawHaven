<script setup>
import HeaderAdmin from "../layouts/headerAdmin.vue";
import KlantenAdminComp from "../components/klantenAdminComp.vue";
defineProps({
    users: Array,
});
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
                    <div class="flex flex-row justify-around px-30 py-5">
                        <p>Voornaam</p>
                        <p>Achternaam</p>
                        <p>E-mail</p>
                        <p>Telefoonnummer</p>
                        <div class="flex flex-row">
                            <p>Acties</p>
                        </div>
                    </div>

                    <hr class="border-t border-white/100" />
                    <div class="overflow-auto h-110">
                        <KlantenAdminComp
                            v-for="user in users"
                            :key="user.email"
                            :first_name="user.first_name"
                            :last_name="user.last_name"
                            :email="user.email"
                            :phone_number="user.phone_number"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
