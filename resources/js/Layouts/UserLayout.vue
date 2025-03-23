<template>
        <!-- dinhi liwat is an header -->
        <Header class="" /> 
            <!-- Amo ini nganhi it main layout -->            
            <main class="  min-h-screen">
                 <slot />
            </main>
        <Footer class="" />    
        <!-- dinhi liwat is an footer -->             
</template>


<script setup>
    import Footer from '@/Pages/User/Footer/Index.vue';
    import Header from '@/Pages/User/Header/Index.vue';
</script>

