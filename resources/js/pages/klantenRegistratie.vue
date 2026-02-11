<script setup>
import { ref } from "vue";
</script>

<template>
    <div class="w-full h-screen">
        <div
            :style="{ backgroundImage: `url('/img/backgroundImage.jpg')` }"
            class="w-full h-full bg-cover bg-center"
        >
            <h1 class="flex justify-center top-20">PawHaven</h1>
            <div class="flex justify-center items-center">
                <div
                    class="rounded-[41px] border-solid border-white bg-white opacity-22 border-white w-200 h-60 blur-[50]"
                >
                    <div class="flex flex-col">
                        <div>
                            <p class="text-white">Voornaam</p>
                            <div class="rounded-full bg-white"></div>
                        </div>
                        <div>
                            <p>Achternaam</p>
                            <div></div>
                        </div>
                        <div>
                            <p>Email</p>
                            <div></div>
                        </div>
                        <div>
                            <p>Telefoonnummer</p>
                            <div></div>
                        </div>
                        <div>
                            <p>Wachtwoord</p>
                            <div></div>
                        </div>
                        <div>
                            <p>Bevestig Wachtwoord</p>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
