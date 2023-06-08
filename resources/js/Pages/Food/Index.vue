<script setup lang="js">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TheSearchBar from '@/Components/TheSearchBar.vue';
import ThePaginationBar from '@/Components/ThePaginationBar.vue';
import FoodList from './Partials/FoodList.vue';
import { Head } from '@inertiajs/vue3';
</script>
 
<template>
    <Head title="Food list" />
 
    <AuthenticatedLayout>
        <div class="max-w-xl mx-auto p-4 sm:p-6 lg:p-8">
            <TheSearchBar></TheSearchBar>
            <FoodList></FoodList>
            <ThePaginationBar></ThePaginationBar>
        </div>
    </AuthenticatedLayout>
</template>