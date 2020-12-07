require('./bootstrap');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';

import moment from 'moment';
require('moment/locale/fr');

Vue.mixin({ methods: { route } });
Vue.mixin(require('./base'))

Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);

Vue.filter('toDateTime', function (value) {
    if (value) {
        return moment(String(value[0])).locale(value[1]).format('Do MMMM YYYY, h:mm A')
    }
});

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);

