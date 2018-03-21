import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';


window.Vue = Vue;
Vue.use(VueRouter);


window.axios = require('axios');
// axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
