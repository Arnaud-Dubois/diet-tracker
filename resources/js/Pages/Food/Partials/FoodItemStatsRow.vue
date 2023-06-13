<script setup lang="js">
import OrganicFoodIcon from '@/Components/icons/OrganicFoodIcon.vue';

defineProps({
    title: {
        type: String,
        required: true
    },
    value: {
        type: Number,
        required: true
    },
    unit: {
        type: String,
        required: false
    }
})

</script>

<template>
    <li class="food-item-stats-row flex space-between bg-white p-3 mb-1">
        <div><OrganicFoodIcon/></div>
        <div class="food-item-stats-row-title text-gray-500 mr-auto pl-2 capitalize">{{ title }}</div>
        <div class="font-bold">{{ value }} {{ unit }}</div>
    </li>
</template>