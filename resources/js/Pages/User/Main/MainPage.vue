<template>
    <UserLayout>
        <h1>Main Page</h1>
        <div>
            <div class="card flex justify-center">
                <FloatLabel>
                    <InputText id="username" v-model="value" />
                    <label for="username">Username</label>
                </FloatLabel>
            </div>
        </div>
    </UserLayout>
</template>

<script setup>
import { ref } from "vue";
import UserLayout from '@/Layouts/UserLayout.vue';



// Register data
const value = ref("");

</script>
