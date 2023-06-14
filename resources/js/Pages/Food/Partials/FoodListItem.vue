<script setup lang="js">
import FoodItemHeader from './FoodItemHeader.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { Link, router } from '@inertiajs/vue3';

const props = defineProps({
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
        required: false
    },
    src: {
        type: String,
        required: false
    }
});

function removeItem() {
    const id = props.foodId
    if(confirm('Remove this food ?')) {
        router.delete(`/food/${id}`)
    }
}

</script>

<template>
    <li class="food-list-item relative p-2 border-b-2 transition ease-in-out duration-100 hover:bg-stone-200">
        <Link :href="route('food.show', { id: foodId })">
            <FoodItemHeader
                :src="src"
                :title="title"
                :diet="diet"
            />
        </Link>
        <SecondaryButton
            @click="removeItem"
            class="absolute top-0 right-0 m-2"
        >
            Remove
        </SecondaryButton>
    </li>
</template>