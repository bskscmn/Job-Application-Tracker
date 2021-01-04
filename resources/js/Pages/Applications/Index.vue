<template>
    <app-layout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Applications') }} 

                </h2>
                <search/>
            </div>
        </template>

        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div v-if="this.search != null" class="mb-1">
                    Search: <b>{{ this.search }}</b>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                    <tabs-app :tab="this.tab"/>

                	<div v-if="this.search == null && this.appList.data.length == 0" class="text-center">
                        <div class="px-5 py-2 bg-indigo-800 text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                            <span class="font-semibold text-center flex-auto">You dont have any application in your list.</span>
                        </div>
                    </div>
                    <div v-else-if="this.search != null && this.appList.data.length == 0" class="text-center">
                        <div class="px-5 py-2 bg-indigo-800 text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                            <span class="font-semibold text-center flex-auto">Sorry, we found 0 result for your search, Please try searching again.</span>
                        </div>
                    </div>
                	<div v-for="app in this.appList.data" v-bind:key="'app-'+app.id" >
                		<div class="p-3 shadow-xl">
                			<div class="flex justify-between items-center">
                				<div class="text-sm text-teal-800">
                                    <span v-if="app.app_date !== null">{{ __('Application Date') }}: <b>{{ [app.app_date, get_locale]| toDateTime }}</b></span> 
                                    <span v-else>{{ __('Application Date is empty!') }}</span> 
                                </div>

                				<app-status :id="app.condition_id" :condition="app.condition.condition"/>
                				
                			</div>
                			<div><b>{{ __('Company') }}:</b> {{app.company}} </div>
                			<div class="mb-4"><b>{{ __('Post Title') }}:</b> {{app.post_title}}</div>
                			<a :href="'/application/'+app.id" class="bg-indigo-500 text-white px-2 py-1  rounded hover:bg-indigo-700">{{ __('Details') }}</a> 
                			<a :href="'/application/edit/'+app.id" class="bg-indigo-500 text-white px-2 py-1  rounded hover:bg-indigo-700">{{ __('Edit') }}</a>
                		</div>
                	</div>

                    <div class="mt-6">Pages:
                        <inertia-link v-if="link.url" v-for="link in this.appList.links" v-bind:key="'p-'+link.label" :href="link.url" class="text-indigo-700 p-5" >
                            <span v-bind:class="{'text-red-800' : link.active}">{{ __(decoder(link.label)) }}</span>
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
    import Search from './Search'
    import AppStatus from './AppStatus'
    import TabsApp from './TabsApp'

    export default {
        components: {
            AppLayout,
            Search,
            AppStatus,
            TabsApp
        },

        props: ['apps', 'search', 'tab'],

        data() {
        	return {
        		appList: this.apps,
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
            }
        }
        
    }
</script>
