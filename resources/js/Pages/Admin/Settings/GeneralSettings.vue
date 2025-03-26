<template>
    <AdminLayout title="General Settings">
        <main class="py-12 ">
            <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
               
                <header class="p-4">
                    <h1>General settings</h1>
                    <p class="m-0">Configure the basic information about your tourism website</p>
                    <Divider />
                </header>
                 
                <form action="">
                   <InputText class="!w-full" type="text" v-model="value" /> 
                </form>
          
                

            </section>
        </main>
    </AdminLayout>
</template>

<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import Divider from 'primevue/divider';
    
    import InputText from 'primevue/inputtext';





</script>