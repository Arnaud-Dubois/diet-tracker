<script setup lang="js">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TheSearchBar from '@/Components/TheSearchBar.vue';
import ThePaginationBar from '@/Components/ThePaginationBar.vue';
import FoodList from './Partials/FoodList.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from "vue";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import MagnifierIcon from '@/Components/icons/MagnifierIcon.vue';
import { router } from '@inertiajs/vue3';

let search = ref('');

/**
 * 
 * Will replace the current page with the search value.
 * Use the Inertia Client to make a get request.
 * 
 */
function searching() {
    router.get(
        "/food",
        { search: search.value },
        {
            preserveState: true,
            replace: true
        }
    );
}

function clearSearchValue() {
    search.value = ''
    searching()
}

</script>


<template>
    <Head title="Food list" />

    <AuthenticatedLayout>
        <div class="max-w-xl mx-auto p-4 sm:p-6 lg:p-8">
            <div class="flex gap-2 py-4 px-2">
                <TheSearchBar
                    v-model="search"
                    @clear="clearSearchValue"
                />
                <PrimaryButton @click="searching">
                    <MagnifierIcon class="mr-1"/> Search
                </PrimaryButton>
            </div>            
            

            <FoodList :list="$page['props']['foods']['data']"></FoodList>
            <ThePaginationBar :links="$page['props']['foods']['links']"></ThePaginationBar>
        </div>
    </AuthenticatedLayout>
</template>