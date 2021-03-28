require('./bootstrap');

import Vue from 'vue';
window.Vue = require('vue');

import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});

console.log(111111111111111);
Echo.join(`test.channel`)


Echo.channel('my-channel-1')
    .listen('my-event', (e) => {
        console.log(e);
    });

Echo.channel('user')
    .listen('UserUpdate', (e) => {
        console.log(e);
    });