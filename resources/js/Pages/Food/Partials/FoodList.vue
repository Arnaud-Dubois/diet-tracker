 <template>
    <div v-if="list.length > 0" class="food-list">
        <ul>
            <FoodListItem
                :key="food.id"
                v-for="food in list"
                :title="food.name"
                :foodId="food.id"
                :diet="food.diet"
            />
        </ul>
    </div>
    <div v-else class="text-center italic text-gray-400 my-8">No items</div>
</template>

<script setup lang="js">
import FoodListItem from './FoodListItem.vue';

defineProps({
    list: Array
})

</script>
