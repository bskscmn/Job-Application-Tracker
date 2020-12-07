<template>
	<div>
		<div v-if="id == 1">
		  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">{{  __(condition) }}</span>
		</div>
		<div v-else-if="id == 2">
		  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">{{  __(condition) }}</span>
		</div>
		<div v-else-if="id == 3">
		  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{  __(condition) }}</span>
		</div>
		<div v-else-if="id == 4">
		  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">{{  __(condition) }}</span>
		</div>
		<div v-else-if="id == 5">
		  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-teal-100 text-white">{{  __(condition) }}</span>
		</div>
		<div v-else>
		  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">{{  __(condition) }}</span>
		</div>
	</div>
</template>

<script>

    export default {
        

        props: ['id', 'condition'],

        
    }
</script>