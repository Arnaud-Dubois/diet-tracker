<script setup lang="js">
import FoodListItem from './FoodListItem.vue';

defineProps(['foods']);

</script>
 
<template>
    <div>
        <ul>
            <FoodListItem
                :key="food.id"
                v-for="food in $page['props']['foods']"
                :title="food.name"
                :foodId="food.id"
            />
        </ul>
    </div>
</template>