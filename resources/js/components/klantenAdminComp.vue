<script setup>
import { ref } from "vue";

defineProps({
    first_name: String,
    last_name: String,
    email: String,
    phone_number: String,
});

const deleteAccount = async () => {
    if (confirm("Weet je zeker dat je je account wilt verwijderen?")) {
        const token = localStorage.getItem("token");
        // console.log(token);
        try {
            await axios.delete("/api/delete-account", {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });

            window.location.href = "/admin";
        } catch (error) {
            console.error(error.response?.data);
        }
    }
};
</script>

<template>
    <div class="flex flex-row justify-between px-30 py-5">
        <p>{{ first_name }}</p>
        <p>{{ last_name }}</p>
        <p>{{ email }}</p>
        <p>{{ phone_number }}</p>
        <div class="flex space-x-2">
            <button
                class="rounded-[41px] border border-white bg-white/20 text-xs"
            >
                Wachtwoord resetten
            </button>
            <button
                class="rounded-[41px] border border-white bg-white/20 text-xs" @click="deleteAccount"
            >
                Klant inactief zetten
            </button>
            <button
                class="rounded-[41px] border border-white bg-white/20 text-xs"
            >
                Klantvoorkeuren bekijken
            </button>
        </div>
    </div>
    <hr class="border-t border-white/100" />
</template>
