
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
/*  */
import {ServerTable} from 'vue-tables-2'
Vue.use(ServerTable, {}, false, 'bootstrap4', 'default');

/* Vue Http Resource */
import VueResource from 'vue-resource'
Vue.use(VueResource);

import Courses from './components/Courses.vue'
Vue.component('courses-list', Courses);

import Students from './components/Students.vue'
Vue.component('students-list', Students);

import StripeForm from './components/StripeForm.vue'
Vue.component('stripe-form', StripeForm);
/*  */

const app = new Vue({
    el: '#app'
});
