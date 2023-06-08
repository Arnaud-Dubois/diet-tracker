<script setup lang="js">
defineProps({
    title: {
        type: String,
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
    <div class="flex gap-4">
        <div class="food-list-img-container">
            <img v-if="src" :src="src" :alt="title">
            <span v-else>No image</span>
        </div>
        <div>
            <h3 class="food-list-item-title">{{ title }}</h3>
            <div class="food-list-item-diet">{{ diet }}*</div>
        </div>
    </div>
</template>

<style scoped>
.food-list-img-container {
    width: 80px;
    height: 80px;
    background-color: var(--light-outline-color);
    color: gray;
    border-radius: 3px;
}

.food-list-item-title {
    font-size: 2rem;
    font-weight: 500;
}

.food-list-item-diet {
    color: var(--main-color);
}
</style>