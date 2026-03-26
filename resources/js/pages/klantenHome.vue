<script setup>
import Header from '../layouts/header.vue';
import { Inertia } from '@inertiajs/inertia';
import axios from 'axios';

axios.defaults.withCredentials = true;
axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').content;

const deleteAccount = async () => {
  if(confirm('Weet je zeker dat je je account wilt verwijderen?')) {
    try {
      await axios.post('/delete-account');
      Inertia.visit('/login');
      } catch (error) {
        if(error.response) {
          alert(error.response.data.message || 'Er is iets misgegaan.');
        } else {
          alert('Er is iets misgegaan.');
      }
    }
  }
}
// defineProps({
//   klantnummer: String
// })
</script>

<template>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div
    class="w-full h-screen bg-cover bg-center relative"
    style="background-image: url('/img/backgroundImage.jpg');"
  >
    <!-- طبقة شفافة / Transparent layer-->
    <div class="absolute inset-0 bg-black/25"></div>

    <!-- المحتوى / Content-->
    <div class="relative z-10 h-full flex flex-col text-white">

      <!-- Header -->
      <Header />

      <!-- البوكسات / boxes-->
      <div class="flex justify-center items-center flex-1 gap-20">

        <!-- Box 1 -->
        <div class="glass-box">
          <div class="icon">✏</div>
          <p>Mijn merk voorkeuren</p>
        </div>

        <!-- Box 2 -->
        <div class="glass-box">
          <div class="icon">🐾</div>
          <p>Mijn huisdieren</p>
        </div>

        <!-- Box 3 -->
        <div class="glass-box" @click="deleteAccount">
          <div class="icon">❌</div>
          <p>Account verwijderen</p>
        </div>

      </div>
    </div>
  </div>
</meta>
</template>

<style scoped>
.font-delius {
  font-family: 'Delius', cursive;
}

/* Glass effect */
.glass-box {
  width: 300px;
  height: 300px;
  border-radius: 40px;
  backdrop-filter: blur(15px);
  background: rgba(255, 255, 255, 0.15);
  border: 1px solid rgba(255, 255, 255, 0.6);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  transition: 0.3s ease;
}

.glass-box:hover {
  transform: scale(1.05);
}

.icon {
  font-size: 70px;
  margin-bottom: 20px;
}
</style>
