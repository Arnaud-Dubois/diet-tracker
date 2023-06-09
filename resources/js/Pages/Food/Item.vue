<script setup lang="js">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FoodItemStatsRow from './Partials/FoodItemStatsRow.vue';
import FoodItemHeader from './Partials/FoodItemHeader.vue';
import { Head, Link } from '@inertiajs/vue3';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import ArrowLeftIcon from '@/Components/icons/ArrowLeftIcon.vue'

defineProps(['food'])

/* TODO : Should be better to have all the statistics in a list */

</script>
 
<template>
    <Head title="Food list item" />
 
    <AuthenticatedLayout>
        <div class="max-w-xl mx-auto p-4 sm:p-6 lg:p-8">

            <div class="mb-4">
                <Link href="/food">
                    <SecondaryButton>
                        <ArrowLeftIcon/>
                        <span class="ml-1">Back</span>
                    </SecondaryButton>
                </Link>
            </div>

            <header>
                <FoodItemHeader
                    :title="food.name"
                />
            </header>
            <div>
                <div class="mt-8">
                    <h4>Statistiques</h4>
                    <ul>
                        <FoodItemStatsRow title="calories" :value="food.calories" />
                        <FoodItemStatsRow title="proteines" :value="food.proteines" />
                        <FoodItemStatsRow title="glucides" :value="food.glucides" />
                        <FoodItemStatsRow title="lipides" :value="food.lipides" />
                    </ul>
                </div>
                <div class="mt-8">
                    <h4>Informations</h4>
                    <p class="text-gray-500 italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquid sunt odit architecto soluta nam id, ullam voluptatum provident possimus a nihil, repellat facilis? Deserunt excepturi temporibus mollitia doloribus omnis?</p>
                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>