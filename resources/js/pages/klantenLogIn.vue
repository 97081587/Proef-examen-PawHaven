<script setup>
import logo from "../components/logo.vue";
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    klantNummer: "",
    email: "",
    password: "",
});

const submitKlantNummer = () => {
    form.post("/LogIn", {
        data: {
            klantNummer: form.klantNummer,
        },
        onSuccess: () => {
            form.reset();
        },
    });
};
const submitEmailPassword = () => {
    if (!form.email || !form.password) {
        alert("Vul e-mail en wachtwoord in");
        return;
    }

    form.post("/LogIn", {
        data: {
            email: form.email,
            password: form.password,
        },
        onSuccess: () => {
            form.reset();
        },
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
            <logo />

            <!-- log in formulier -->
            <div class="flex justify-center top-50 relative">
                <div
                    class="absolute z-10 rounded-t-[41px] border-t border-l border-r border-white bg-white/20 w-[500px] h-[507px] backdrop-blur-[30px]"
                >
                    <div class="">
                        <!-- inloggen met klantnummer -->
                        <form
                            @submit.prevent="submitKlantNummer"
                            class="flex flex-col z-40 relative mt-7 ml-10 mr-10"
                        >
                            <div>
                                <p class="text-white">
                                    Inloggen met klantnummer:
                                </p>
                                <input
                                    type="text"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.klantNummer"
                                />
                            </div>
                            <button
                                type="submit"
                                style="display: none"
                            ></button>
                        </form>

                        <!-- lijn + "Of" -->
                        <div class="flex flex-row items-center ml-0">
                            <hr class="border-t border-white w-full my-4" />
                            <p class="text-white ml-4 mr-4">Of</p>
                            <hr class="border-t border-white w-full my-4" />
                        </div>

                        <!-- inloggen met email + wachtwoord -->
                        <form
                            @submit.prevent="submitEmailPassword"
                            class="flex flex-col z-40 relative ml-10 mr-10"
                        >
                            <div>
                                <p class="text-white">E-mail:</p>
                                <input
                                    type="email"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.email"
                                />
                            </div>
                            <div>
                                <p class="text-white">Wachtwoord:</p>
                                <input
                                    type="password"
                                    class="rounded-full bg-white w-full px-4 py-2"
                                    v-model="form.password"
                                />
                                <p class="text-white flex justify-end">
                                    Wachtwoord vergeten?
                                </p>
                            </div>
                            <button
                                type="submit"
                                style="display: none"
                            ></button>
                        </form>

                        <!-- links naar registratie en admin inlog -->
                        <div
                            class=" text-black opacity-[0.54] mt-5 ml-5 gap-2"
                        >
                            <a href="/registratie"
                                >Nog geen klant? • Registreren</a
                            >
                            <br />
                            <a href="/">Inloggen als admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
