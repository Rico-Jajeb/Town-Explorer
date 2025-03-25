<template>
        <main class="sm:flex flex-row min-h-96">
            <!-- This is the aside nav bar in dashboard -->
            <DashboardAside />
            <!-- This is for the Dashboard content -->
            <section class="bg-red-400 basis-[100vw] ">
                <h1>section</h1>
                <slot />
            </section>
        </main>
</template>


<script setup>
    import { ref } from 'vue';
    import DashboardAside from '@/Pages/Admin/Dashboard/DashboardAside.vue';


</script>

