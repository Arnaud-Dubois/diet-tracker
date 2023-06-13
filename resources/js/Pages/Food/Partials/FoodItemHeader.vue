<script setup lang="js">
import AppleIcon from "@/Components/icons/AppleIcon.vue"

defineProps({
    title: {
        type: String,
        required: true
    },
    diet: {
        type: Array,
        required: false,
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
            <AppleIcon v-else />
        </div>
        <div>
            <h3 class="food-list-item-title">{{ title }}</h3>
            <div class="food-list-item-diet">
                <i>
                    <span v-if="diet">
                        <span :key="item" v-for="item in diet" class="ml-1 p-2 bg-green-100">{{ item }}</span>
                    </span>
                    <span v-else>No diet</span>
                </i>
            </div>
        </div>
    </div>
</template>

<style scoped>
.food-list-img-container {
    width: 80px;
    height: 80px;
    background-color: var(--light-outline-color);
    color: gray;
    border-radius: 6px;
    overflow: hidden;
    display: grid;
    justify-content: center;
    align-content: center;
}

.food-list-item-title {
    font-size: 2rem;
    font-weight: 500;
}

.food-list-item-diet {
    color: var(--main-color);
}
</style>