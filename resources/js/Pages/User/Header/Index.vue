<template >
        <header class="h-20 flex gap-4 justify-between bg-blue-300">
            <div class="bg-green-400">
                <Link href="/" >Home</Link>   
                
           
            </div>

      

        

<!-- <nav class="">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
    
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign up</a>
            <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
            
                <li>
                    <Link href="About" >About</Link>
                </li>
                <li>
                    <Link href="About" >Services</Link>
                </li>
                <li>
                    <Link href="About" >Tourist Spot</Link>
                </li>
                <li>
                    <Link href="About" >Blogs</Link>
                </li>
                <li>
                    <Link href="About" >Contact</Link>
                </li>
                   
            </ul>
        </div>
    </div>
</nav> -->

  <nav class=" border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between p-4">
      <!-- Logo or Site Name -->
      <div class="text-lg font-bold text-gray-800 dark:text-white">
        MySite
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden md:flex space-x-6">
        <router-link to="/about" class="nav-link">About</router-link>
        <router-link to="/services" class="nav-link">Services</router-link>
        <router-link to="/tourist-spot" class="nav-link">Tourist Spot</router-link>
        <router-link to="/blogs" class="nav-link">Blogs</router-link>
        <router-link to="/contact" class="nav-link">Contact</router-link>
      </div>

      <!-- Hamburger Button (Mobile) -->
      <button 
        @click="isMenuOpen = !isMenuOpen"
        class="md:hidden p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600"
      >
        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
        </svg>
      </button>
    </div>

    <!-- Mobile Navigation Menu -->
    <div 
      v-show="isMenuOpen"
      class="absolute top-16 left-0 w-full bg-white dark:bg-gray-900 shadow-lg md:hidden transition-transform duration-300 ease-in-out"
    >
      <ul class="flex flex-col space-y-4 p-4">
        <li><router-link to="/about" class="mobile-link">About</router-link></li>
        <li><router-link to="/services" class="mobile-link">Services</router-link></li>
        <li><router-link to="/tourist-spot" class="mobile-link">Tourist Spot</router-link></li>
        <li><router-link to="/blogs" class="mobile-link">Blogs</router-link></li>
        <li><router-link to="/contact" class="mobile-link">Contact</router-link></li>
      </ul>
    </div>
  </nav>



</header>


</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    
    import { ref } from 'vue';

const isMenuOpen = ref(false);
</script>
