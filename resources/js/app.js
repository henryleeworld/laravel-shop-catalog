import './bootstrap';
import Vue from 'vue';
/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

window.Vue = Vue;

import FrontPage from './components/Front/Index.vue';
import ThePagination from './components/ThePagination.vue';
import Category from './components/Front/Category.vue';
import Product from './components/Front/Product.vue';
Vue.component('front-page', FrontPage);
Vue.component('the-pagination', ThePagination);
Vue.component('category', Category);
Vue.component('product', Product);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el:'#app'
});
