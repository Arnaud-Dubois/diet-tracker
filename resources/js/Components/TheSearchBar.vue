<script setup lang="js">

defineProps({
    modelValue: {
        type: String,
        required: true,
    },
});

defineEmits([
    'update:modelValue',
    'blur',
    'clear'
]);


</script>

<template>
    <div class="the-search-bar w-full">
        <input
            id="search"
            type="text"
            placeholder="apple, banana, strawbery"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            @blur="$emit('blur')"
            class="px-3 py-2 w-full text-sm rounded border border-green-500 focus:border-indigo-500 focus:ring-indigo-500"
        >
        <button v-if="modelValue"
            class="the-search-bar-clear text-xs uppercase p-1 bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded"
            @click="$emit('clear')">
            Clear
        </button>
    </div>
</template>

<style scoped>
.the-search-bar {
    position: relative;
}
.the-search-bar-clear {
    position: absolute;
    margin-right: 0.3rem;
    right: 0;
    top: 50%;
    transform: translateY(-50%);

}
</style>