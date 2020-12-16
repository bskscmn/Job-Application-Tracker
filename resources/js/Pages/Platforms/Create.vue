<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('New Platform') }} 
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                    <form @submit.prevent="submit" class="w-full">
                                
                        <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2 mr-1" for="platform_name">
                                          *
                                        </label>

                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-900"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                        </svg>

                                        <input v-model="form.platform_name" class="shadow appearance-none border rounded w-full py-2 px-3 ml-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="platform_name" type="text" v-bind:placeholder="__('Platform Name')">
                                        <div v-if="$page.errors.platform_name" class="text-red-700 text-sm">{{ $page.errors.platform_name[0] }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path fill="#010101" d="M482.25,210.752L346.5,346.502c-37.5,37.5-98.25,37.5-135.75,0l-45.25-45.25l45.25-45.25l45.25,45.25  c12.5,12.469,32.781,12.5,45.25,0L437,165.502c12.469-12.484,12.469-32.781,0-45.266l-45.25-45.25  c-12.469-12.469-32.781-12.469-45.25,0l-48.469,48.469c-22.469-13.219-48-18.891-73.281-17.188l76.5-76.531  c37.5-37.484,98.281-37.484,135.75,0l45.25,45.25C519.75,112.471,519.75,173.268,482.25,210.752z M213.938,388.564L165.5,437.002  c-12.5,12.5-32.781,12.469-45.25,0L75,391.752c-12.5-12.469-12.5-32.75,0-45.25l135.75-135.75c12.469-12.469,32.781-12.469,45.25,0  l45.25,45.25l45.25-45.25l-45.25-45.25c-37.5-37.484-98.25-37.484-135.75,0L29.75,301.252c-37.5,37.5-37.5,98.281,0,135.75  L75,482.252c37.469,37.5,98.25,37.5,135.75,0l76.5-76.5C261.969,407.439,236.5,401.752,213.938,388.564z"/>
                                        </svg>

                                        <input v-model="form.link" class="shadow appearance-none border rounded w-full ml-4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="link" type="text" v-bind:placeholder="__('Platform URL')">
                                    </div>
                                </div>
                            </div>                           

                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        
                                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>

                                        <div class="ml-4 text-lg leading-7 text-gray-900 font-semibold">{{ __('Login Info') }}</div>
                                        
                                    </div>

                                    <div class="ml-12">
                                        <div class="md:flex md:items-center mb-3 max-w-lg">
                                            <div class="w-full md:w-1/2 px-3">
                                              <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="username">
                                                {{ __('User Name') }}
                                              </label>
                                              <input v-model="form.username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="tel" v-bind:placeholder="__('User Name')">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                              <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                                {{ __('Email') }}
                                              </label>
                                              <input v-model="form.email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="@">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        
                            <div class="grid grid-cols-1">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 13h-4v-1h4v1zm2.318-4.288l3.301 3.299-4.369.989 1.068-4.288zm11.682-5.062l-7.268 7.353-3.401-3.402 7.267-7.352 3.402 3.401zm-6 8.916v.977c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-20h14.056l1.977-2h-18.033v24h10.189c3.163 0 9.811-7.223 9.811-9.614v-3.843l-2 2.023z"/></svg>
                                        <div class="ml-4 text-lg leading-7 text-gray-900 font-semibold">{{ __('Notes') }}</div>
                                    </div>

                                    <div class="ml-12">
                                        <textarea v-model="form.note" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mt-5">
                            {{ __('Save') }}
                        </button>
                       
                    </form> 

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
        props: [],
        data() {
            return {
              form: {
                platform_name: null,
                link: null,
                username: null,
                email: null,
                note: null,
              },
            }
        },
        methods: {
            
            submit() {
                this.$inertia.post('/platform/store', this.form)
            },
        }
    }
</script>


