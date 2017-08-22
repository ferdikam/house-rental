import store from './store/store'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./burger');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('commune-form', require('./components/commune/CommuneForm.vue'));
Vue.component('commune-list', require('./components/commune/CommuneList.vue'));

Vue.component('type-logement-list', require('./components/typeLogement/TypeLogementList.vue'))
Vue.component('type-logement-form', require('./components/typeLogement/TypeLogementForm.vue'))

const app = new Vue({
    el: '#app',
    store
});
