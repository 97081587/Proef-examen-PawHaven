<script setup>
</script>

<template>
    <div class="w-full h-full">
        <div
            :style="{ backgroundImage: `url('/img/backgroundImage.jpg')` }"
            class="w-full h-screen bg-cover bg-center"
        >
            <h1 class="flex justify-center text-white text-4xl">PawHaven</h1>
            <div class="flex justify-center relative">
                <div
                    class="absolute z-0 rounded-[41px] border-sm border-solid border-white bg-white opacity-22 w-250 h-100 backdrop-blur-[50]"
                ></div>
                <div class="flex flex-row z-40 relative gap-30">
                    <div>
                        <div>
                            <p class="text-white">Voornaam*:</p>
                            <input type="text" class="rounded-full bg-white w-full px-4 py-2" />
                        </div>
                        <div>
                            <p class="text-white">Achternaam*:</p>
                            <input type="text" class="rounded-full bg-white w-full px-4 py-2" />
                        </div>
                        <div>
                            <p class="text-white">Email*:</p>
                            <input type="email" class="rounded-full bg-white w-full px-4 py-2" />
                        </div>
                        <div>
                            <p class="text-white">Telefoonnummer*:</p>
                            <input type="tel" class="rounded-full bg-white w-full px-4 py-2" />
                        </div>
                        <p class="text-black">Al een klant? • Inloggen</p>
                    </div>
                    <div>
                        <div>
                            <p class="text-white">Wachtwoord*:</p>
                            <input type="password" class="rounded-full bg-white w-full px-4 py-2" />
                        </div>
                        <div>
                            <p class="text-white">Wachtwoord herhalen:</p>
                            <input type="password" class="rounded-full bg-white w-full px-4 py-2" />
                        </div>
                        <div class="text-white border-white">
                            <p >Registreren als Klant</p>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
