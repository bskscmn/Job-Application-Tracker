<template>
    <app-layout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Job Platforms That I Signed In') }} 
                </h2>
                <search/>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div v-if="this.search != null"  class="mb-1">
                    Search: <b>{{ this.search }}</b>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <div v-if="this.search == null && this.platformList.data.length == 0" class="text-center">
                        <div class="px-5 py-2 bg-indigo-800 text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                            <span class="font-semibold text-center flex-auto">You dont have any job platform in your list.</span>
                        </div>
                    </div>
                    <div v-else-if="this.search != null && this.platformList.data.length == 0" class="text-center">
                        <div class="px-5 py-2 bg-indigo-800 text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                            <span class="font-semibold text-center flex-auto">Sorry, we found 0 result for your search, Please try searching again.</span>
                        </div>
                    </div>
                    <div v-for="platform in this.platformList.data" v-bind:key="'platform-'+platform.id" >
                        <div class="p-3 shadow-xl">

                            <div><b>{{ __('Platform Name') }}:</b> {{platform.platform_name}} </div>

                                
                            <div>
                                <b>{{ __('Link') }}: </b>
                                <a :href=platform.link target="_blank" class="underline text-teal-900 dark:text-white ml-1">{{platform.link}}</a>
                            </div>
                            
                            <div><b>{{ __('User Name') }}:</b> {{platform.username}} </div>
                            <div><b>{{ __('Email') }}:</b> {{platform.email}} </div>
                            <div><b>{{ __('Notes') }}:</b> {{platform.note}} </div>

                            <div class="mt-4"> 
                                <div class="flex items-stretch">
                                    <a :href="'/platform/edit/'+platform.id" class="bg-indigo-500 text-white px-2 py-1  rounded hover:bg-indigo-700 mr-1">{{ __('Edit') }}</a>
                                    <form @submit.prevent="submit(platform.id, platform.platform_name)" method="POST">
                                        <button type="submit" class="bg-red-800 text-white px-2 py-1 rounded   hover:bg-red-700">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">Pages:
                        <inertia-link v-if="link.url" v-for="link in this.platformList.links" v-bind:key="'p-'+link.label" :href="link.url" class="text-indigo-700 p-5" >
                            <span v-bind:class="{'text-red-800' : link.active}">{{ __(decoder(link.label)) }}</span>
                        </inertia-link>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Search from './Search'

    export default {
        components: {
            AppLayout,
            Search,
        },

        props: ['platforms', 'search'],

        data() {
            return {
                platformList: this.platforms,
            }
        },

        computed: {
            get_locale() {
                if(this.$page.locale == 'fr') {
                    return 'fr';
                }
                return 'en'
            },
        },

        methods: {

            decoder (str) {
                var textArea = document.createElement('textarea');
              textArea.innerHTML = str;
              return textArea.value;
            },
            submit(id, name) {
                if(confirm(name+": Do you really want to delete?")){
                    this.$inertia.delete('/platform/delete/'+id)
                }
            }
        }
        
    }
</script>
