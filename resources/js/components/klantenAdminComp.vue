<script setup>
import { ref } from "vue";
import axios from "axios";

const props = defineProps({
    id: Number,
    first_name: String,
    last_name: String,
    email: String,
    phone_number: String,
});

const deleteAccount = async () => {
    const confirmed = confirm(
        "Weet je zeker dat je dit account wilt verwijderen?",
    );

    if (!confirmed) return;

        const token = localStorage.getItem("token");
        // console.log(token);
        try {
            console.log(props.id);
            await axios.delete(`/api/admin/delete-klant/${props.id}`, {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });

            window.location.href = "/admin";
        } catch (error) {
            console.error(error.response?.data || error.message);
        }
    };
</script>

<template>
    <td class="flex flex-row justify-between px-30 py-5">
        <tr>
            {{
                first_name
            }}
        </tr>
        <tr>
            {{
                last_name
            }}
        </tr>
        <tr>
            {{
                email
            }}
        </tr>
        <tr>
            {{
                phone_number
            }}
        </tr>
        <div class="flex space-x-2">
            <button
                class="rounded-[41px] border border-white bg-white/20 text-xs"
            >
                Wachtwoord resetten
            </button>
            <button
                class="rounded-[41px] border border-white bg-white/20 text-xs"
                @click="deleteAccount"
            >
                Klant inactief zetten
            </button>
            <button
                class="rounded-[41px] border border-white bg-white/20 text-xs"
            >
                Klantvoorkeuren bekijken
            </button>
        </div>
    </td>
    <hr class="border-t border-white/100" />
</template>
