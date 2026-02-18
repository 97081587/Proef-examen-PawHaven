<script setup>
</script>

<template>
  <div
    class="w-full h-screen bg-cover bg-center relative"
    style="background-image: url('/img/backgroundImage.jpg');"
  >
    
    <div class="absolute inset-0 bg-black/30"></div>

    <!-- المحتوى -->
    <div class="relative z-10 h-full flex flex-col text-white">

      <!-- Header -->
      <div class="flex justify-between items-center px-12 py-8">
        <!-- عنوان PawHaven معدل -->
        <h1 class="text-white text-4xl font-delius text-center">
          PawHaven
        </h1>

        <div class="text-right">
          <p class="cursor-pointer hover:underline">Uitloggen</p>
          <p class="text-sm mt-1">
            Mijn klantennummer:
          </p>
        </div>
        
      </div>

      <!-- خط أبيض -->
      <div class="border-t border-white/40 mx-12"></div>

      <!-- البوكسات -->
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
        <div class="glass-box">
          <div class="icon">⚙</div>
          <p>Account instellingen</p>
        </div>

      </div>
    </div>
  </div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Delius&display=swap');

/* .font-delius {
  font-family: 'Delius', cursive;
} */

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
