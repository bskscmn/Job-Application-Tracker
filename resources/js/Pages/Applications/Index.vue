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
                	<div v-if="this.appList.length == 0" class="text-center">
                		<div class="px-5 py-2 bg-indigo-800 text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
						    <span class="font-semibold text-center flex-auto">You dont have any job application in your list.</span>
						</div>
						</div>
                	<div v-for="app in this.appList" v-bind:key="app.id">
                		<div class="p-3 shadow-xl">
                			
                			<div class="flex justify-between items-center">
                				<div class="text-sm text-teal-800">Application Date: <span v-if="app.app_date !== null"><b>{{ app.app_date | toDateTime }}</b></span> </div>

                				<div v-if="app.condition_id === 1">
								  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">{{ app.condition.condition }}</span>
								</div>
								<div v-else-if="app.condition_id === 2">
								  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">{{ app.condition.condition }}</span>
								</div>
								<div v-else-if="app.condition_id === 3">
								  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{ app.condition.condition }}</span>
								</div>
								<div v-else-if="app.condition_id === 4">
								  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">{{ app.condition.condition }}</span>
								</div>
								<div v-else-if="app.condition_id === 5">
								  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-teal-100 text-white">{{ app.condition.condition }}</span>
								</div>
								<div v-else>
								  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">No Action</span>
								</div>
                				
                			</div>
                			<div><b>Company:</b> {{app.company}} </div>
                			<div class="mb-4"><b>Post:</b> {{app.post_title}}</div>
                			<a :href="'application/'+app.id" class="bg-indigo-500 text-white px-2 py-1  rounded hover:bg-indigo-700">Details</a> 
                			<a :href="'/application/edit/'+app.id" class="bg-indigo-500 text-white px-2 py-1  rounded hover:bg-indigo-700">Edit</a>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
	import moment from 'moment'
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
