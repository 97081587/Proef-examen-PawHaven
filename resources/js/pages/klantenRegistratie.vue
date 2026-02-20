<script setup>
// import { reactive } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import Logo from "../components/logo.vue";

const form = useForm({
    regiFirstName: "",
    regiLastName: "",
    regiMail: "",
    regiPhoneNumber: "",
    regiPassword: "",
    regiPasswordConfirmation: "",
    regiCustomerNumber: "",
});

// validatie
const submit = () => {
    if (form.regiPassword !== form.regiPasswordConfirmation) {
        alert("Wachtwoorden komen niet overeen");
        return;
    }

    form.post("/registratie", {
        onSuccess: () => {
            form.reset();
        },
    });

    // Send data to Laravel
    Inertia.post("/registratie", {
        regi_first_name: form.regiFirstName,
        regi_last_name: form.regiLastName,
        regi_email: form.regiMail,
        regi_phone_number: form.regiPhoneNumber,
        regi_password: form.regiPassword,
        regi_password_confirmation: form.regiPasswordConfirmation,
        regi_customer_number: form.regiCustomerNumber,
    });
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
                                    v-model="form.regiFirstName"
                                />
                            </div>
                            <div>
                                <p class="text-white">Achternaam*:</p>
                                <input
                                    type="text"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.regiLastName"
                                />
                            </div>
                            <div>
                                <p class="text-white">E-mail*:</p>
                                <input
                                    type="email"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.regiMail"
                                />
                            </div>
                            <div>
                                <p class="text-white">Telefoonnummer*:</p>
                                <input
                                    type="tel"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.regiPhoneNumber"
                                />
                            </div>
                            <div class="mt-20">
                                <a href="/login" class="text-black opacity-[0.54]" tabindex="-1">
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
                                    v-model="form.regiPassword"
                                />
                            </div>
                            <div>
                                <p class="text-white">Wachtwoord herhalen:</p>
                                <input
                                    type="password"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.regiPasswordConfirmation"
                                />
                            </div>
                            <div>
                                <p class="text-white mt-5">Uw bestaande PawHaven klantnummer:</p>
                                <input
                                    type="text"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.regiCustomerNumber"
                                />
                            </div>
                            <button
                                type="submit"
                                class="mt-10 w-[300px] h-[120px] rounded-[41px] border border-solid border-white bg-white/20 text-white text-[25px] hover:scale-105 transition-transform duration-300"
                            >
                                <div
                                    class="flex flex-col justify-center items-center gap-2 mt-5"
                                >
                                    <p class="text-white text-[25px]">
                                        Registreren als klant
                                    </p>
                                    <p class="text-white text-[10px]">
                                        Hierna wordt u doorgestuurd naar de
                                        home pagina.
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
