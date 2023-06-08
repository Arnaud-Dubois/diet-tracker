<script setup lang="js">
import FoodItemHeader from './FoodItemHeader.vue'
import { Link } from '@inertiajs/vue3';

defineProps({
    title: {
        type: String,
        required: true
    },
    foodId: {
        type: Number,
        required: true
    },
    diet: {
        type: Array,
        required: false,
        default: ['Vegetarian', 'Vegan', 'Paleo', 'Keto']
    },
    src: {
        type: String,
        required: false
    }
});
</script>

<template>
    <li class="food-list-item">
        <Link :href="route('food.show', { id: foodId })">
            <FoodItemHeader
                :src="src"
                :title="title"
                :diet="diet"
            />
        </Link>
    </li>
</template>

<style scoped>

.food-list-item {
    padding: 1rem 0;
    border-bottom: 1px solid var(--light-outline-color);
}

.food-list-item:hover {
    background-color: var(--light-outline-color);
}

</style>