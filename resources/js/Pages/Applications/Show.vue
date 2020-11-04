<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Application
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        			<div class="flex justify-between items-center">
        				<div><b>Company:</b> {{app.company}} </div>
        				<div class="text-sm text-gray-800">Application Date: ../../.... </div>
        			</div>
        			<div><b>Post:</b> {{app.post_title}}</div>
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
        
        props: ['app'],
        
        data() {
        	return {
        		app: this.app
        	}
        },

        mounted() {
        	//console.log(this.app);
        }     	
        
    }
</script>
