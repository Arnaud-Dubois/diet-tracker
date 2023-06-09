<script setup lang="js">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TheSearchBar from '@/Components/TheSearchBar.vue';
import ThePaginationBar from '@/Components/ThePaginationBar.vue';
import FoodList from './Partials/FoodList.vue';
import { Head } from '@inertiajs/vue3';
import { Inertia } from "@inertiajs/inertia";
import { ref } from "vue";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import MagnifierIcon from '@/Components/icons/MagnifierIcon.vue';

let search = ref('');

/**
 * 
 * Will replace the current page with the search value.
 * Use the Inertia Client to make a get request.
 * 
 */
function searching() {
    Inertia.get(
        "/food",
        { search: search.value },
        {
            preserveState: false
        }
    );
}

</script>


<template>
    <Head title="Food list" />

    <AuthenticatedLayout>
        <div class="max-w-xl mx-auto p-4 sm:p-6 lg:p-8">
            <TheSearchBar></TheSearchBar>

            <div class="flex gap-2 p-4">
                <input
                    id="search"
                    type="text"
                    placeholder="apple, banana, strawbery"
                    v-model="search"
                    class="px-2 py-1 w-full text-sm rounded border border-green-500"
                >
                <PrimaryButton @click="searching" color="green" weight="800">
                    <MagnifierIcon class="mr-1"/> Search
                </PrimaryButton>
            </div>            

            <FoodList :list="$page['props']['foods']['data']"></FoodList>
            <ThePaginationBar :links="$page['props']['foods']['links']"></ThePaginationBar>
        </div>
    </AuthenticatedLayout>
</template>