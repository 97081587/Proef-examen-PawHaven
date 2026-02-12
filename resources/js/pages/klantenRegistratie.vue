<script setup>
// import { reactive } from "vue";
// import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";

// const form = reactive({
//     RegiFirstName: "",
//     RegiLastName: "",
//     RegiEmail: "",
//     RegiPhoneNumber: "",
//     RegiPassword: "",
//     RegiPasswordConfirm: "",
// });

    const form = useForm({
        RegiFirstName: "",
        RegiLastName: "",
        RegiEmail: "",
        RegiPhoneNumber: "",
        RegiPassword: "",
        RegiPasswordConfirm: "",
    });

const submit = () => {
    if (form.RegiPassword !== form.RegiPasswordConfirm) {
        alert("Passwords do not match");
        return;
    }

    // Send data to Laravel
    // Inertia.post("/registratie", {
    //     RegiFirstName: form.RegiFirstName,
    //     RegiLastName: form.RegiLastName,
    //     RegiEmail: form.RegiEmail,
    //     RegiPhoneNumber: form.RegiPhoneNumber,
    //     RegiPassword: form.RegiPassword,
    //     RegiPassword_confirmation: form.RegiPasswordConfirm,
    // });

    form.post("/registratie", {
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <div class="w-full h-full">
        <div
            :style="{ backgroundImage: `url('/img/backgroundImage.jpg')` }"
            class="w-full h-screen bg-cover bg-center relative"
        >
            <div class="absolute inset-0 bg-black/25"></div>
            <h1
                class="flex justify-center text-white text-4xl top-32 relative font-delius"
            >
                PawHaven
            </h1>

            <div class="flex justify-center top-50 relative">
                <div
                    class="absolute z-0 rounded-[41px] border border-solid border-white bg-white/20 w-[1006px] h-[470px] backdrop-blur-[30px]"
                >
                    <form
                        @submit.prevent="submit"
                        class="flex justify-center flex-row z-40 relative gap-30 mt-7"
                    >
                        <div class="gap-">
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
                                <p class="text-white">Email*:</p>
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
                            <a href="/" class="text-black opacity-[0.54]">
                                Al een klant? • Inloggen
                            </a>
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
                                class="rounded-[41px] border border-solid border-white bg-white/20 w-[300px] h-[120px] backdrop-blur-[30px]"
                            >
                                <div
                                    class="flex flex-col justify-center items-center gap-2 mt-5"
                                >
                                    <p class="text-white text-[25px]">
                                        Registreren als Klant
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
