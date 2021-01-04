<template>

    <ul class="list-reset flex border-b">
      <li class=" mr-1">
        <a v-if="this.tab == null" class="-mb-px bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="/applications">{{ __('All') }}</a>
        <a v-else class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/applications">{{ __('All') }}</a>
      </li>
      <li class="mr-1">
        <a v-if="this.tab == 'applied'" class="-mb-px bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="/applications?tab=applied">{{ __('Applied') }}</a>
        <a v-else class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/applications?tab=applied">{{ __('Applied') }}</a>
      </li>
      <li class="mr-1">
        <a v-if="this.tab == 'notApplied'" class="-mb-px bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="/applications?tab=notApplied">{{ __('Not Applied') }}</a>
        <a v-else class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/applications?tab=notApplied">{{ __('Not Applied') }}</a>
      </li>
    </ul>


</template>

<script>

    export default {
        
        props: ['tab'],      
        
    }
</script>