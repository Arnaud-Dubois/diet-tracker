 <template>
    <div>
        <ul>
            <FoodListItem
                :key="food.id"
                v-for="food in list"
                :title="food.name"
                :foodId="food.id"
            />
        </ul>
    </div>
</template>

<script setup lang="js">
import FoodListItem from './FoodListItem.vue';

defineProps({
    list: Array
})

</script>
