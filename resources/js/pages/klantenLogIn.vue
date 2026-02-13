<script setup>
import logo from "../components/logo.vue";
</script>

<template>
    <div class="w-full h-full">
        <!-- achtergrond afbeelding en logo -->
        <div
            :style="{ backgroundImage: `url('/img/backgroundImage.jpg')` }"
            class="w-full h-screen bg-cover bg-center relative"
        >
            <!-- achtergrond verduistering -->
            <div class="absolute inset-0 bg-black/25"></div>
            <logo />

            <!-- log in formulier -->
            <div class="flex justify-center top-50 relative">
                <div
                    class="absolute z-10 rounded-t-[41px] border-t border-l border-r border-white bg-white/20 w-[500px] h-[507px] backdrop-blur-[30px]"
                >
                    <!-- inloggen met klantnummer -->
                    <form
                        @submit.prevent="submit"
                        class="flex flex-row z-40 relative gap-30 mt-7"
                    >
                        <div>
                            <p class="text-white">Inloggen met klantnummer:</p>
                        </div>
                    </form>

                    <div class="flex flex-row items-center">
                        <hr class="border-t border-white w-full my-4" />
                        <p class="text-white ml-4 mr-4">Of</p>
                        <hr class="border-t border-white w-full my-4" />
                    </div>

                    <!-- inloggen met email + wachtwoord -->
                    <form
                        @submit.prevent="submit"
                        class="flex justify-center flex-row z-40 relative gap-30 mt-7"
                    ></form>
                    <p>
                        <a href="/registratie">Nog geen klant? • Registreren</a>
                    </p>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
