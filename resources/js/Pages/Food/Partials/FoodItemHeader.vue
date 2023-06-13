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
        <div class="food-list-img-container w-32 h-32 bg-gray-500 rounded-xl overflow-hidden grid justify-center content-center shadow-lg">
            <img v-if="src" :src="src" :alt="title">
            <AppleIcon v-else />
        </div>
        <div>
            <h3 class="food-list-item-title text-4xl capitalize font-bold my-4">{{ title }}</h3>
            <div class="food-list-item-diet">
                <i>
                    <span v-if="diet">
                        <span :key="item" v-for="item in diet" class="ml-1 p-2 text-green-600 font-semibold bg-green-100 capitalize">{{ item }}</span>
                    </span>
                    <span v-else>No diet</span>
                </i>
            </div>
        </div>
    </div>
</template>
