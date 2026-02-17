<script setup>
// import { reactive } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";
// import { Inertia } from "@inertiajs/inertia";
import Logo from "../components/logo.vue";

const form = useForm({
    RegiFirstName: "",
    RegiLastName: "",
    RegiEmail: "",
    RegiPhoneNumber: "",
    RegiPassword: "",
    RegiPasswordConfirm: "",
});

// validatie
const submit = () => {
    if (form.RegiPassword !== form.RegiPasswordConfirm) {
        alert("Wachtwoorden komen niet overeen");
        return;
    }

    form.post("/registratie", {
        onSuccess: () => {
            form.reset();
        },
    });

    // Send data to Laravel
    // Inertia.post("/registratie", {
    //     RegiFirstName: form.RegiFirstName,
    //     RegiLastName: form.RegiLastName,
    //     RegiEmail: form.RegiEmail,
    //     RegiPhoneNumber: form.RegiPhoneNumber,
    //     RegiPassword: form.RegiPassword,
    //     RegiPassword_confirmation: form.RegiPasswordConfirm,
    // });
};
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
            <Logo />

            <!-- registratie formulier -->
            <div class="flex justify-center top-50 relative">
                <div
                    class="absolute z-0 rounded-[41px] border border-solid border-white bg-white/20 w-[1006px] h-[470px] backdrop-blur-[30px]"
                >
                    <form
                        @submit.prevent="submit"
                        class="flex justify-center flex-row z-40 relative gap-30 mt-7"
                    >
                        <div>
                            <div>
                                <p class="text-white">Voornaam*:</p>
                                <input
                                    type="text"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.RegiFirstName"
                                />
                            </div>
                            <div>
                                <p class="text-white">Achternaam*:</p>
                                <input
                                    type="text"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.RegiLastName"
                                />
                            </div>
                            <div>
                                <p class="text-white">E-mail*:</p>
                                <input
                                    type="email"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.RegiEmail"
                                />
                            </div>
                            <div>
                                <p class="text-white">Telefoonnummer*:</p>
                                <input
                                    type="tel"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.RegiPhoneNumber"
                                />
                            </div>
                            <div class="mt-20">
                                <a href="/" class="text-black opacity-[0.54]">
                                    Al een klant? • Inloggen
                                </a>
                            </div>
                        </div>
                        <div>
                            <div>
                                <p class="text-white">Wachtwoord*:</p>
                                <input
                                    type="password"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.RegiPassword"
                                />
                            </div>
                            <div>
                                <p class="text-white">Wachtwoord herhalen:</p>
                                <input
                                    type="password"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.RegiPasswordConfirm"
                                />
                            </div>
                            <button
                                type="submit"
                                class="mt-30 w-[300px] h-[120px] rounded-[41px] border border-solid border-white bg-white/20 text-white text-[25px]"
                            >
                                <div
                                    class="flex flex-col justify-center items-center gap-2 mt-5"
                                >
                                    <p class="text-white text-[25px]">
                                        Registreren als klant
                                    </p>
                                    <p class="text-white text-[10px]">
                                        Hierna wordt u doorgestuurd naar de
                                        login pagina.
                                    </p>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
