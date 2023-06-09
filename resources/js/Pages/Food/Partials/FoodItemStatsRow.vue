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
    }
})

</script>

<template>
    <li class="food-item-stats-row">
        <div><OrganicFoodIcon/></div>
        <div class="food-item-stats-row-title text-gray-500">{{ title }}</div>
        <div class="font-bold">{{ value }} kcal*</div>
    </li>
</template>

<style scoped>
.food-item-stats-row {
    display: flex;
    justify-content: space-between;
    background-color: #FAFAFA;
    padding: 0.5rem;
    margin-bottom: 2px;
}

.food-item-stats-row-title {
    margin-right: auto;
    padding-left: .5rem;
    text-transform: capitalize;
}
</style>