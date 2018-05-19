
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueAgile from 'vue-agile'
Vue.use(VueAgile)

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('slider-carousel', require('./components/home/SliderCarousel.vue'));
Vue.component('recent', require('./components/home/Recent.vue'));
Vue.component('akomodasi', require('./components/home/Akomodasi'));
Vue.component('koliner', require('./components/home/Kuliner.vue'));
Vue.component('sidebar', require('./components/partials/sidebar.vue'));
Vue.component('list-category', require('./components/pages/ListCategory'));
Vue.component('recent-post', require('./components/pages/RecentPost'));
Vue.component('traveling', require('./components/home/Traveling'));

const app = new Vue({
    el: '#app'
});
