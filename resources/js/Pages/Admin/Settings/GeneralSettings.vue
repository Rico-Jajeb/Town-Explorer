<template>
    <AdminLayout title="General Settings">
        <main class="py-12 px-4 sm:px-6">
            <section class="max-w-7xl  mx-auto  sm:px-6 lg:px-8 pb-8 bg-white overflow-hidden shadow-xl rounded-lg">
           
            <form @submit.prevent="form.post('add.Project')">

                <header class="px-4 pt-4 mt-8 mb-8">
                    <h1 class="text-2xl font-bold text-gray-900  dark:text-white mb-2" >General settings</h1>
                    <p class="m-0">Configure the basic information about your tourism website</p>
                    <Divider />
                </header>
                 
                <div class="px-4">
                        <label for="Web Name" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Website Name</label>
                        <InputText class="!w-full" type="text" v-model="form.sysName" /> 
                </div>
                <div class="px-4 mt-8 mb-8">
                        <label for="Slogan" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white"> Slogan/Tagline</label>
                        <InputText class="!w-full" type="text"  v-model="form.slogan" />              
                </div>
                <div class="px-4 mt-8 mb-8">
                        <label for="email" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white"> Slogan/Tagline</label>
                        <InputText class="!w-full" type="text"  v-model="form.sysLogo" />              
                </div>
                <div class="px-4 mt-8 mb-8">
                        <label for="email" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white"> Slogan/Tagline</label>
                        <InputText class="!w-full" type="text" v-model="form.sysFavicon" />              
                </div>

                <!-- <section class=" mt-4 px-4  md:flex md:flex-row ">
                    <div class="  xl:basis-1/2 md:basis-1/2 ">
                        <label for="email" class="block mb-2 text-lg font-medium  text-gray-900 dark:text-white">Logo</label>
                        <div class=" block sm:flex ">
                            <img v-if="src" :src="src" alt="Image" class="shadow-md rounded-xl w-full md:w-40 md:h-40 h-64 "  />
                            <FileUpload mode="basic" @select="onFileSelect" customUpload auto severity="secondary" class="md:mt-0 mt-4 p-button-outlined ml-2 sm:ml-8 md:ml-2" />
                        </div>
                    </div>
                    <div class="  xl:basis-1/2 md:basis-2/2 md:mt-0 mt-10">
                        <label for="email" class="block mb-2 text-lg font-medium  text-gray-900 dark:text-white">Favicon</label>
                        <div class=" block sm:flex ">
                            <img v-if="src" :src="src" alt="Image" class="shadow-md rounded-xl w-full md:w-40 md:h-40 h-64"  />
                            <FileUpload mode="basic" @select="onFileSelect" customUpload auto severity="secondary" class="md:mt-0 mt-4 p-button-outlined ml-2 sm:ml-8 md:ml-2" />
                        </div>
                    </div>

                    
                </section> -->

                <div class="px-4">
                    <button type="submit" :disabled="form.processing"  severity="secondary" label="Submit" class="text-lg font-medium text-white mt-10  bg-blue-500 rounded-md px-5 py-3"><i class="pi pi-save"></i> Save Changes</button>                    
                </div>

                </form>
            </section>
        </main>

   
        
    </AdminLayout>
</template>

<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import Divider from 'primevue/divider';
    
    import InputText from 'primevue/inputtext';
    import FileUpload from 'primevue/fileupload';

    import 'primeicons/primeicons.css'

    import { useForm } from '@inertiajs/vue3' // amo ini an knan system form

    import { ref } from "vue";
    const src = ref(null);

    function onFileSelect(event) {
        const file = event.files[0];
        const reader = new FileReader();

        reader.onload = async (e) => {
            src.value = e.target.result;
        };

        reader.readAsDataURL(file);
    }



    
    
    
    const form = useForm({
        //amo liwat ini an code para han system form
      sysName: null,
      slogan: null,
      sysLogo: null,
      sysFavicon: null,
      
    })

</script>