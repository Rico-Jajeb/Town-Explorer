<template>
    <div class="container">
        <!-- dinhi liwat is an header -->
        <Header />
            <!-- Amo ini nganhi it main layout -->            
            <main>
                 <slot />
            </main>
        <!-- dinhi liwat is an footer -->       
        <Footer />
    </div>
</template>


<script setup>
    import Footer from '@/Pages/User/Footer/Index.vue';
    import Header from '@/Pages/User/Header/Index.vue';
</script>