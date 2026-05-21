<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import Header from "../layouts/header.vue";

const form = useForm({
    selectedSoort: "",
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
                    class="absolute z-10 rounded-[41px] border border-white bg-white/20 w-[1006px] h-[470px] backdrop-blur-[30px]"
                >
                    <form
                        @submit.prevent="submit"
                        class="flex justify-center flex-row z-40 relative gap-30 mt-7"
                    >
                        <div>
                            <div>
                                <p class="text-white">naam*</p>
                                <input
                                    type="text"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                />
                            </div>
                            <div>
                                <p class="text-white">geboortedatum</p>
                                <input
                                    type="date"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                />
                            </div>
                            <div>
                                <p class="text-white">soort*</p>
                                <select
                                    type="dropdown"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                    v-model="form.selectedSoort"
                                >
                                    <option value="">Selecteer soort</option>
                                    <option value="hond">Hond</option>
                                    <option value="kat">Kat</option>
                                </select>
                            </div>
                            <div>
                                <p v-if="form.selectedSoort !== ''" class="text-white">ras*</p>
                                <select
                                    v-if="form.selectedSoort === 'hond'"
                                    type="dropdown"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                >
                                    <option value="">Selecteer ras</option>
                                    <option value="labrador">Labrador</option>
                                    <option value="pers">Pers</option>
                                </select>
                                <select
                                    v-else-if="form.selectedSoort === 'kat'"
                                    type="dropdown"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                >
                                    <option value="">Selecteer ras</option>
                                    <option value="siamees">Siamees</option>
                                    <option value="maine coon">Maine Coon</option>
                                </select>
                                
                            </div>
                            <a
                                href="/huisdieren"
                                class="text-black opacity-[0.54]"
                                tabindex="-1"
                            >
                                annuleren
                            </a>
                        </div>
                        <div>
                            <img
                                src="C:\Users\oscar\OneDrive - Deltion College\Github\Proef-examen-PawHaven\proef-examen-pawhaven\public\img\bananaCat.png"
                                alt="banana peel placed on top of a cat's head (banana cat)"
                                class="w-[175px] h-[175px] rounded-full object-cover border-2 border-white"
                            />
                            <button
                                type="submit"
                                class="mt-10 w-[300px] h-[120px] rounded-[41px] border border-solid border-white bg-white/20 text-white text-[25px] hover:scale-105 transition-transform duration-300"
                            >
                                Voeg huisdier toe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
