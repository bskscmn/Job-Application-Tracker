<template>
    <app-layout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Applications
                </h2>
                <form @submit.prevent="submit">
                    <div class="bg-white flex items-center rounded-full shadow-md">
                        <input v-model="form.search" class="rounded-l-full w-full py-2 px-3 text-gray-700 bg-white leading-tight focus:outline-none " id="search" type="text" placeholder="Search">
                        
                        <div class="p-1">
                          <button type="submit" class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-8 h-6 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="136pt" version="1.1" viewBox="-1 0 136 136.21852" width="136pt">
                                <g id="surface1">
                                    <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 " style=" stroke:none;fill-rule:nonzero;fill:rgb(255%,255%,255%);fill-opacity:1;" />
                                </g>
                            </svg>
                          </button>
                        </div>
                    </div>
                </form>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                	<div v-if="this.appList.length == 0" class="text-center">
                		<div class="px-5 py-2 bg-indigo-800 text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
						    <span class="font-semibold text-center flex-auto">You dont have any job application in your list.</span>
						</div>
					</div>
                	<div v-for="app in this.appList.data" v-bind:key="'app-'+app.id" >
                		<div class="p-3 shadow-xl">
                			
                			<div class="flex justify-between items-center">
                				<div class="text-sm text-teal-800">
                                    <span v-if="app.app_date !== null">Application Date: <b>{{ app.app_date | toDateTime }}</b></span> 
                                    <span v-else>Application Date is empty!</span> 
                                </div>

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
                			<a :href="'/application/'+app.id" class="bg-indigo-500 text-white px-2 py-1  rounded hover:bg-indigo-700">Details</a> 
                			<a :href="'/application/edit/'+app.id" class="bg-indigo-500 text-white px-2 py-1  rounded hover:bg-indigo-700">Edit</a>
                		</div>
                	</div>

                    <div class="mt-6">Pages:
                        <inertia-link v-if="link.url" v-for="link in this.appList.links" v-bind:key="'p-'+link.label" :href="link.url" class="text-indigo-700 p-5" >
                            <span v-bind:class="{'text-red-800' : link.active}">{{ decoder(link.label) }}</span>
                        </inertia-link>
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
        		appList: this.apps,
                form: {
                    search: '',
                },
        	}
        },
        methods: {
            submit() {
              this.$inertia.get('/applications', this.form)
            },

            decoder (str) {
                var textArea = document.createElement('textarea');
              textArea.innerHTML = str;
              return textArea.value;
            }
        },

        mounted() {
        }     	
        
    }
</script>
