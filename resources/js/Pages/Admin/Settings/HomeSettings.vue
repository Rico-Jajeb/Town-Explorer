<template>
  <AdminLayout title="Home Settings">
    <main class="py-12 px-4 sm:px-6">
            <section class="max-w-7xl  mx-auto  sm:px-6 lg:px-8 pb-8 bg-white overflow-hidden shadow-xl rounded-lg">
               <form action="">
                <header class="px-4 pt-4 mt-8 mb-8">
                    <h1 class="text-2xl font-bold text-gray-900  dark:text-white mb-2" >Home settings</h1>
                    <p class="m-0">Configure how your homepage appaers to visitors</p>
                    <Divider />
                </header>
                 
                <section class="px-4 mb-4">
                    <label for="email" class="block mb-2 text-lg font-medium text-gray-500 dark:text-white"> Banner Image</label>
                    <div class=" overflow-hidden rounded-lg md:h-96 h-56 bg-red-400">
                        <Image src="https://primefaces.org/cdn/primevue/images/galleria/galleria10.jpg" alt="Image" width="1920" class="h-full rounded-lg object-cover" preview />
                    </div>
                    <div class="mt-3 block sm:flex ">
                        <FileUpload mode="basic" @select="onFileSelect" customUpload auto severity="secondary" class="md:mt-0 mt-4 mr-4 md:mb-0 mb-4  p-button-outlined" />
                        <img v-if="src" :src="src" alt="Image" class="shadow-md rounded-xl w-full md:w-40 md:h-40 h-64"  />
                     
                    </div>
                    <label for="email" class="mt-3 block mb-2 text-sm font-medium  text-gray-500 dark:text-white">Recommended size: 1920x600 pixels</label>
                </section>

                <div class="px-4">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">Hero Title</label>
                        <InputText class="!w-full" type="text" v-model="value" /> 
                </div>
                <div class="px-4 mt-6 mb-6">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">Hero Subtitle</label>
                        <InputText class="!w-full" type="text" v-model="value" />              
                </div>
                <section class="px-4 md:flex md:flex-row">
                    <div class="  xl:basis-1/2 md:basis-1/2 md:pr-8">
                            <label for="email" class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">CTA Button Text</label>
                            <InputText class="!w-full" type="text" v-model="value" /> 
                    </div>
                    <div class="  xl:basis-1/2 md:basis-1/2 md:pl-8">
                            <label for="email" class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">CTA Button Link</label>
                            <InputText class="!w-full" type="text" v-model="value" />              
                    </div>
                </section>
                <section class="px-4 my-4">
                    <label for="email" class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">Number of Featured Destinations</label>
                    <div class="card flex justify-center">
                        <Select v-model="selectedDestinations" :options="Destinations" optionLabel="name" placeholder="Select a featured destination" checkmark :highlightOnSelect="false" class="!w-full md:w-56" />
                    </div>                    
                </section>


                <div class="px-4 mt-8">
                    <button type="submit" severity="secondary" label="Submit" class="text-lg font-medium text-white   bg-blue-500 rounded-md px-5 py-3"><i class="pi pi-save"></i> Save Changes</button>                    
                </div>

                </form>
            </section>
        </main>
  </AdminLayout>
</template>

<script setup>
    import { ref } from "vue";
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import Divider from 'primevue/divider';
    
    import InputText from 'primevue/inputtext';
    import FileUpload from 'primevue/fileupload';

    import 'primeicons/primeicons.css'

    import Image from 'primevue/image';

    import Select from 'primevue/select';



 
    const src = ref(null);

    function onFileSelect(event) {
        const file = event.files[0];
        const reader = new FileReader();

        reader.onload = async (e) => {
            src.value = e.target.result;
        };

        reader.readAsDataURL(file);
    }


    const selectedDestinations = ref();
    const Destinations = ref([
        { name: '3' },
        { name: '6' },
        { name: '9' },
        { name: '12' }
    ]);

</script>