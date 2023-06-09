<script setup lang="js">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TheSearchBar from '@/Components/TheSearchBar.vue';
import ThePaginationBar from '@/Components/ThePaginationBar.vue';
import FoodList from './Partials/FoodList.vue';
import { Head } from '@inertiajs/vue3';
import { Inertia } from "@inertiajs/inertia";
import { watch, ref } from "vue";

/* TODO: Should get a list of the search value, but is not working correctly right now. */
let search = ref('');
watch(search, value => {
    Inertia.get(
        "/food",
        { search: value },
        {
            preserveState: false
        }
    );
});

</script>

<!-- NOTE: $page['props'] comes from Inertia and FoodController -->

<template>
    <Head title="Food list" />

    <AuthenticatedLayout>
        <div class="max-w-xl mx-auto p-4 sm:p-6 lg:p-8">
            <TheSearchBar></TheSearchBar>

            <div class="p-4">
                <label class="text-sm text-green-500" for="search">Search</label>
                <input id="search" type="text" v-model="search" class="px-2 py-1 w-full text-sm rounded border border-green-500">
            </div>

            <FoodList :list="$page['props']['foods']['data']"></FoodList>
            <ThePaginationBar :links="$page['props']['foods']['links']"></ThePaginationBar>
        </div>
    </AuthenticatedLayout>
</template>