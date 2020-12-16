<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">
                {{ __('Welcome') }} !
            </div>

            <div class="mt-6 text-gray-500">
                <div v-if="selected_language == 'fr'">
                    Vous pouvez facilement organiser votre demande d'emploi.
                </div>
                <div v-else>
                    You can easily organize your job applications. 
                </div>
            </div>
        </div>

        <div v-if="selected_language == 'fr'">
            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

                <div class="p-6">
                    <div class="mb-6 text-xl">
                        Candidatures
                    </div>
                    <div class="flex items-start">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204 S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255 s114.75,255,255,255s255-114.75,255-255H459z"/>
                        </svg>

                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/application/create">Ajouter une nouvelle candidature </a></div>
                    </div>

                    <div class="ml-12 mb-1">
                        <div class="mt-2 text-sm text-gray-500">

                            Vous pouvez ajouter une nouvelle demande à votre liste avec ces informations : 

                            Statut, date de la demande, heure, société, lieu, titre du poste, lien, personne de contact, description, les fichiers que vous avez envoyés, lettre de motivation, notes
                        </div>

                        <a href="/application/create">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Aller à la page</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>

                    <div class="flex items-start border-t border-gray-200 mt-1 pt-3">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204 S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255 s114.75,255,255,255s255-114.75,255-255H459z"/>
                        </svg>
                        
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/applications">Afficher et modifier vos candidatures</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Consultez toutes vos demandes et modifiez-les facilement.
                        </div>

                        <a href="/applications">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Aller à la page</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                    <div class="mb-6 text-xl">
                        Plateformes d'Emploi
                    </div>

                    <div class="flex items-start">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204 S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255 s114.75,255,255,255s255-114.75,255-255H459z"/>
                        </svg>

                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/platform/create">Ajouter une nouvelle plateforme</a></div>
                    </div>

                    <div class="ml-12 mb-1">
                        <div class="mt-2 text-sm text-gray-500">

                            Vous pouvez ajouter une nouvelle plateforme d'emploi à votre liste avec ces informations : 

                            Nom de la plateforme, lien, Informations de connexion(Nom d'utilisateur, email), notes
                        </div>

                        <a href="/platform/create">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Aller à la page</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>

                    <div class="flex items-start border-t border-gray-200 mt-1 pt-3">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204 S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255 s114.75,255,255,255s255-114.75,255-255H459z"/>
                        </svg>
                        
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/platforms">Afficher et modifier vos plateformes</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Consultez toutes vos plateformes et modifiez-les facilement.
                        </div>

                        <a href="/platforms">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Aller à la page</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

                <div class="p-6">
                    <div class="mb-6 text-xl">
                        Applications
                    </div>
                    <div class="flex items-start">
                        
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204 S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255 s114.75,255,255,255s255-114.75,255-255H459z"/>
                        </svg>

                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/application/create">Add New Job Application</a></div>
                    </div>

                    <div class="ml-12 mb-1">
                        <div class="mt-2 text-sm text-gray-500">

                            You can add new application to your list with the information:

                            Status, Aplication Date, Time, Company, Location, Post Title, Link, Contact Person, Description, The files you sent , Motivation Letter, Notes
                        </div>

                        <a href="/application/create">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Go to the page</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>

                    <div class="flex items-start border-t border-gray-200 mt-1 pt-3">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204 S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255 s114.75,255,255,255s255-114.75,255-255H459z"/>
                        </svg>
                        
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/applications">Display and Edit Your Applications</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            See all of your applications and edit easily.
                        </div>

                        <a href="/applications">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Go to the page</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                    <div class="mb-6 text-xl">
                        Job Platforms
                    </div>

                    <div class="flex items-start">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204 S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255 s114.75,255,255,255s255-114.75,255-255H459z"/>
                        </svg>

                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/platform/create">Add New Job Platform</a></div>
                    </div>

                    <div class="ml-12 mb-1">
                        <div class="mt-2 text-sm text-gray-500">

                            You can add new platform to your list with the information:

                            Platform Name, Link, Login Info(username, email), Notes
                        </div>

                        <a href="/platform/create">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Go to the page</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>

                    <div class="flex items-start border-t border-gray-200 mt-1 pt-3">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204 S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255 s114.75,255,255,255s255-114.75,255-255H459z"/>
                        </svg>
                        
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/platforms">Display and Edit Your Platforms</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            See all of your job platforms and edit easily.
                        </div>

                        <a href="/platforms">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Go to the page</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            
        </div>

            
        
    </div>
        
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
        computed: {
            selected_language(){
                if(this.$page.locale == 'fr') {
                    return 'fr';
                }
                return 'en'
            }
        }
    }
</script>
