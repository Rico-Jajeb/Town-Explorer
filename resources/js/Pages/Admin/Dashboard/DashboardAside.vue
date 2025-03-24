<template>

    <aside  v-if="visible2" class="bg-orange-500 basis-[15vw] "  >
        <h1 class="text-center"> aside</h1>
        <Button icon="pi pi-times"  @click="toggleAside" />
    </aside>
    <div v-if="visible3"  class="">
        <Button icon="pi pi-bars"  @click="toggleAside" />        
    </div>
 
</template>

<script setup>
import { ref } from 'vue';

import Button from 'primevue/button';


// This is responsible for the aside nav bar showing and not 
const visible2 = ref(true);
const visible3 = ref(false);
const toggleAside = () => {
    visible2.value = !visible2.value;
    visible3.value = !visible3.value;

};


</script>