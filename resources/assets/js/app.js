
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.Swal = require('sweetalert2');
require('./bootstrap');
window.PerfectScrollbar = require('perfect-scrollbar').default;
require('jquery-validation');
require('select2');
window.Vue = require('vue');

/*
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('notification',require('./components/Notification.vue'));

const app = new Vue({
    el: '#app',
    data:{
        notifications:''
    },
    methods: {
        btcTrkAPICall: function () {
            axios.post('/user/notification/get').then(response => {
                this.notifications = response.data;
            }).catch(error => console.log(error));
        },
        intervalFetchData: function () {
            setInterval(() => {
                this.btcTrkAPICall();
            }, 1000);
        }
    },
    mounted () {
        // Run the functions once when mounted
        this.btcTrkAPICall();
        this.intervalFetchData();
    }
});


$(document).ready(function () {
   $('.alert').delay(2500).slideUp(200); 
});