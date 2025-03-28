<template>
    <AdminLayout title="General Settings">
        <main class="py-12 px-4 sm:px-6">
            <section class="max-w-7xl  mx-auto  sm:px-6 lg:px-8 pb-8 bg-white overflow-hidden shadow-xl rounded-lg">
               <form action="">
                <header class="px-4 pt-4 mt-8 mb-8">
                    <h1 class="text-2xl font-bold text-gray-900  dark:text-white mb-2" >General settings</h1>
                    <p class="m-0">Configure the basic information about your tourism website</p>
                    <Divider />
                </header>
                 
                <div class="px-4">
                        <label for="email" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Website Name</label>
                        <InputText class="!w-full" type="text" v-model="value" /> 
                </div>
                <div class="px-4 mt-8 mb-8">
                        <label for="email" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white"> Slogan/Tagline</label>
                        <InputText class="!w-full" type="text" v-model="value" />              
                </div>

                <section class=" mt-4 px-4  md:flex md:flex-row ">
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

                    
                </section>
                <div class="px-4">
                    <button type="submit" severity="secondary" label="Submit" class="text-lg font-medium text-white mt-10  bg-blue-500 rounded-md px-5 py-3"><i class="pi pi-save"></i> Save Changes</button>                    
                </div>

                </form>
            </section>
        </main>

        <section>   
                <form @submit.prevent="form.post('add.Project')">
                
                <!-- Project Name -->
                <div class="mb-3">
                    <label for="Project Name " class="">Project Name:</label>
                    <input type="text" v-model="form.name" placeholder="Enter project name here..." class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2  ">
                    <div class="text-red-500" v-if="form.errors.name">{{ form.errors.name }}</div>
                </div>
                <!-- Project Description -->
                <div class="mb-3">
                    <label for="Project Description">Project Description:</label>
                    <!-- <input  class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2 " placeholder="Enter project description"> -->
            
                    <textarea type="text" v-model="form.description" id="message" rows="2" class="block bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5  mt-2" placeholder="Enter project description here..."></textarea>
                    <div class="text-red-500" v-if="form.errors.description">{{ form.errors.description }}</div>      
                </div>
            
            
                <!-- Project Image -->
                <div class="mb-3">
                    <label for="Project Img">Project Image:</label>
                    <input type="text" v-model="form.img" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2 ">
                    <div class="text-red-500" v-if="form.errors.img">{{ form.errors.img }}</div>
                </div>
            
                
                <!-- Project Links -->
                <div class="mb-3">
                    <label for="Project Links">Project Links:</label>
                    <input type="text" v-model="form.links" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2  " placeholder="Enter project Links here...">
                    <div class="text-red-500" v-if="form.errors.links">{{ form.errors.links }}</div>    
                </div>
                <!-- submit -->
                <button type="submit" :disabled="form.processing"  class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
                </form>
        </section>
    </AdminLayout>
</template>

<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import Divider from 'primevue/divider';
    
    import InputText from 'primevue/inputtext';
    import FileUpload from 'primevue/fileupload';

    import 'primeicons/primeicons.css'


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


    import { useForm } from '@inertiajs/vue3'
    
    
    
    const form = useForm({
    
      name: null,
      description: null,
      img: null,
      links: null,
      
    
    })

</script>