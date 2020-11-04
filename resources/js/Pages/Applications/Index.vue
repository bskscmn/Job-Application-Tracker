<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Applications
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                	<div v-for="app in this.appList" v-bind:key="app.id">
                		<div class="p-3 shadow-xl">
                			<div class="flex justify-between items-center">
                				<div><b>Company:</b> {{app.company}} </div>
                				<div class="text-sm text-gray-800">Application Date: ../../.... </div>
                			</div>
                			<div><b>Post:</b> {{app.post_title}}</div>
                			<a :href="'application/'+app.id" class="bg-indigo-500 text-white px-2 py-1 mt-2 rounded hover:bg-indigo-700">Details</a>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },

        props: ['apps'],

        data() {
        	return {
        		appList: this.apps
        	}
        },

        mounted() {
        	console.log(this.appList);
        }     	
        
    }
</script>
