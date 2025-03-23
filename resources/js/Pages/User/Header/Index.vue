<template >
    <header class="h-20 flex gap-4 justify-between bg-blue-300 max-w-7xl m-auto">
        <!-- Logo or Site Name -->
        <div class="text-lg font-bold text-gray-800 dark:text-white">
          <Link href="/" >MySite</Link>   
        </div>
        <!-- Navigation  menu -->
        <nav class=" border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl mx-auto flex items-center justify-between p-4">
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-6 ">
                  <Link href="About" >About</Link>
                  <Link href="About" >Services</Link>
                  <Link href="About" >Tourist Spot</Link>
                  <Link href="About" >Blogs</Link>
                  <Link href="About" >Contact</Link> 
                </nav>            
                <nav class="ml-20">
                  <h1>Login</h1>
                </nav>
                <!-- Hamburger Button (Mobile) -->
                <button  @click="isMenuOpen = !isMenuOpen" class="md:hidden p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600">
                  <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                  </svg>
                </button>
            </div>
            <!-- Mobile Navigation Menu -->
            <div v-show="isMenuOpen" class="absolute top-16 left-0 w-full bg-white dark:bg-gray-900 shadow-lg md:hidden transition-transform duration-300 ease-in-out">
              <nav class="flex flex-col space-y-4 p-4">
                <Link href="About" >About</Link>
                  <Link href="About" >Services</Link>
                  <Link href="About" >Tourist Spot</Link>
                  <Link href="About" >Blogs</Link>
                  <Link href="About" >Contact</Link> 
              </nav>
            </div>

        </nav>
    </header>
</template>



<script setup>
    import { Link } from '@inertiajs/vue3'
    
    // This is for the hamburger nav
    import { ref } from 'vue';
    const isMenuOpen = ref(false);
</script>
