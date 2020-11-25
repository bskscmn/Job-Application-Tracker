<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Application
            </h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="mb-3 text-right">
                    <a :href="'/application/edit/'+app.id" class="bg-indigo-500 text-white px-3 py-2  rounded hover:bg-indigo-700">Edit</a>
                    <a :href="'/applications'" class="bg-indigo-500 text-white px-3 py-2 rounded hover:bg-indigo-700">Back</a>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container mx-auto p-4 divide-y divide-gray-200">

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
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">{
                                    { app.condition.condition }}</span>
                            </div>
                            <div v-else-if="app.condition_id === 5">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-teal-100 text-white">
                                    {{ app.condition.condition }}
                                </span>
                            </div>
                            <div v-else>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                    {{ app.condition.condition }}
                                </span>
                            </div>
            			</div>
                        

                        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                            <div class="mt-2 px-6">
                                <span class="text-lg leading-7 text-gray-900 font-semibold">Company:</span> 
                                {{app.company}} 
                            </div>
                            <div class="mt-1 px-6">
                                <span class="text-lg leading-7 text-gray-900 font-semibold">Location:</span> 
                                {{app.location}}
                            </div>
                			<div class="mt-1 px-6">
                                <span class="text-lg leading-7 text-gray-900 font-semibold">Post Title:</span> 
                                {{app.post_title}}
                            </div>

                        
                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="25px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path fill="#010101" d="M482.25,210.752L346.5,346.502c-37.5,37.5-98.25,37.5-135.75,0l-45.25-45.25l45.25-45.25l45.25,45.25  c12.5,12.469,32.781,12.5,45.25,0L437,165.502c12.469-12.484,12.469-32.781,0-45.266l-45.25-45.25  c-12.469-12.469-32.781-12.469-45.25,0l-48.469,48.469c-22.469-13.219-48-18.891-73.281-17.188l76.5-76.531  c37.5-37.484,98.281-37.484,135.75,0l45.25,45.25C519.75,112.471,519.75,173.268,482.25,210.752z M213.938,388.564L165.5,437.002  c-12.5,12.5-32.781,12.469-45.25,0L75,391.752c-12.5-12.469-12.5-32.75,0-45.25l135.75-135.75c12.469-12.469,32.781-12.469,45.25,0  l45.25,45.25l45.25-45.25l-45.25-45.25c-37.5-37.484-98.25-37.484-135.75,0L29.75,301.252c-37.5,37.5-37.5,98.281,0,135.75  L75,482.252c37.469,37.5,98.25,37.5,135.75,0l76.5-76.5C261.969,407.439,236.5,401.752,213.938,388.564z"/>
                                        </svg>
                                        <div class="ml-4 text-lg leading-7 text-gray-900 font-semibold">Link: </div>
                                        <a :href=app.link target="_blank" class="underline text-teal-900 dark:text-white ml-1">{{app.link}}</a>
                                    </div>

                               
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-900"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                        <div class="ml-4 text-lg leading-7 text-gray-900 font-semibold">Contact Person:</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="m-2 text-gray-600 dark:text-gray-400 text-sm">
                                            {{app.contactPerson}}
                                        </div>
                                        <div class="inline-block text-gray-700 text-sm text-center bg-gray-100 rounded-full border-b border-r border-gray-600 px-3 py-1 "><b>email:</b> 
                                            {{app.email}} 
                                        </div>
                                        <div class="inline-block text-gray-700 text-sm text-center bg-gray-100 rounded-full border-b border-r border-gray-600 px-3 py-1 "><b>phone:</b> 
                                            {{app.phone}} 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                                        <div class="ml-4 text-lg leading-7 text-gray-900 font-semibold">Job Description</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            {{app.description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 12h10v1h-10v-1zm7.816-3h-7.816v1h9.047c-.45-.283-.863-.618-1.231-1zm-7.816-2h6.5c-.134-.32-.237-.656-.319-1h-6.181v1zm13 3.975v2.568c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-20h9.5c.312-.749.763-1.424 1.316-2h-12.816v24h10.189c3.163 0 9.811-7.223 9.811-9.614v-3.886c-.623.26-1.297.421-2 .475zm4-6.475c0 2.485-2.015 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.015-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-2.156-.882l-.696-.696-2.116 2.169-.992-.941-.696.697 1.688 1.637 2.812-2.866z"/></svg>
                                        <div class="ml-4 text-lg leading-7 text-gray-900 font-semibold">Sent Files</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            {{app.sent_files}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21.155 8.64c-.909 1.519-2.327 3.067-4.097 3.004-.413.706-.852 1.677-1.339 2.803l-1.312.553c.936-2.343 2.231-4.961 3.698-6.994-.67.529-1.746 1.637-2.662 2.783-1.098-1.828-.3-3.691.973-5.179.021.641.359 1.196.601 1.475-.087-.53-.114-1.489.195-2.351.718-.732 1.364-1.271 2.113-1.76-.083.478.08 1.026.262 1.361.024-.49.224-1.43.521-1.84.924-.727 2.332-1.373 3.892-1.495-.081.973-.436 2.575-1.024 3.604-.515.404-1.221.68-1.791.833.493.089 1.031.077 1.494-.001-.269.743-.552 1.428-.998 2.276-.679.468-1.578.732-2.203.825.46.187 1.272.245 1.677.103zm-13.841 3.805l.645.781 4.773-2.791-.668-.768-4.75 2.778zm6.96-.238l-.668-.767-4.805 2.808.645.781 4.828-2.822zm4.679.007c-.421.203-.851.341-1.286.398-.12.231-.246.494-.377.773l.298.342c.623.692.459 1.704-.376 2.239-.773.497-5.341 3.376-6.386 4.035-.074-.721-.358-1.391-.826-1.948-.469-.557-6.115-7.376-7.523-9.178-.469-.6-.575-1.245-.295-1.816.268-.549.842-.918 1.43-.918.919 0 1.408.655 1.549 1.215.16.641-.035 1.231-.623 1.685l1.329 1.624 7.796-4.446c1.422-1.051 1.822-2.991.93-4.513-.618-1.053-1.759-1.706-2.978-1.706-1.188 0-.793-.016-9.565 4.475-1.234.591-2.05 1.787-2.05 3.202 0 .87.308 1.756.889 2.487 1.427 1.794 7.561 9.185 7.616 9.257.371.493.427 1.119.15 1.673-.277.555-.812.886-1.429.886-.919 0-1.408-.655-1.549-1.216-.156-.629.012-1.208.604-1.654l-1.277-1.545c-.822.665-1.277 1.496-1.377 2.442-.232 2.205 1.525 3.993 3.613 3.993.596 0 1.311-.177 1.841-.51l9.427-5.946c.957-.664 1.492-1.781 1.492-2.897 0-.745-.24-1.454-.688-2.003l-.359-.43zm-7.933-10.062c.188-.087.398-.134.609-.134.532 0 .997.281 1.243.752.312.596.226 1.469-.548 1.912l-5.097 2.888c-.051-1.089-.579-2.081-1.455-2.732l5.248-2.686zm2.097 13.383l.361-.905.249-.609-3.449 2.017.645.781 2.194-1.284z"/></svg>
                                        <div class="ml-4 text-lg leading-7 text-gray-900 font-semibold">Motivation Letter</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            {{app.motivation_letter}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 13h-4v-1h4v1zm2.318-4.288l3.301 3.299-4.369.989 1.068-4.288zm11.682-5.062l-7.268 7.353-3.401-3.402 7.267-7.352 3.402 3.401zm-6 8.916v.977c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-20h14.056l1.977-2h-18.033v24h10.189c3.163 0 9.811-7.223 9.811-9.614v-3.843l-2 2.023z"/></svg>
                                        <div class="ml-4 text-lg leading-7 text-gray-900 font-semibold">Notes</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            {{app.comment}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    
                        <!-- Delete Application -->
                        <div class="w-full  mx-left py-8">
                         <div class="shadow-md">
                            <div class="tab w-full overflow-hidden border-t">
                               <input class="absolute opacity-0" id="tab-multi-one" type="checkbox" name="tabs">
                               <label class="block p-5 leading-normal cursor-pointer text-red-800" for="tab-multi-one">Delete Application</label>
                               <div class="tab-content overflow-hidden border-l-2  border-red-300 leading-normal">
                                    <p class="p-5">
                                        This action is irreversible. <br/>
                                        Delete this item?<br/>
                                    </p>
                                    <form @submit.prevent="submit" method="POST">
                                        <button type="submit" class="m-5 px-5 py-3 rounded text-white bg-red-800 hover:bg-red-700 border-red-900">Delete</button>
                                    </form>
                               </div>
                            </div>
                         </div>
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
        
        props: ['app'],

        methods: {
            submit() {
                if(confirm("Do you really want to delete?")){
                    this.$inertia.delete('/application/delete/'+this.app.id)
                }
            }
        },

        mounted() {
        	//console.log(this.app);
        }     	
        
    }
</script>
