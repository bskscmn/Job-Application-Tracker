require('./bootstrap');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';

import moment from 'moment';

Vue.mixin({ methods: { route } });
Vue.mixin(require('./base'))

Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);

Vue.filter('toDate', function (value) {
    if (value) {
        return moment(String(value)).format('DD / MM / YYYY')
    }
});

Vue.filter('toTime', function (value) {
    if (value) {
        return moment(String(value)).format('h : mm : A')
    }
});

Vue.filter('toDateTime', function (value) {
    if (value) {
        return moment(String(value)).format('Do MMMM YYYY, h:mm A')
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

