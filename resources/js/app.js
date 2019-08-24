/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


Vue.component('my-task-component', require('./components/MyTaskComponent.vue').default);
Vue.component('add-component', require('./components/AddComponent.vue').default);
Vue.component('task-component', require('./components/TaskComponent.vue').default);


const app = new Vue({
    el: '#app',
});
