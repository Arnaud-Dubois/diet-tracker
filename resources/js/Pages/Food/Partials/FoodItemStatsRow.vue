<script setup lang="js">

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
        <div>icon</div>
        <div>{{ title }}</div>
        <div>{{ value }} kcal*</div>
    </li>
</template>

<style scoped>
.food-item-stats-row {
    display: flex;
    justify-content: space-around;
    background-color: #FAFAFA;
    padding: 0.25rem;
}
</style>