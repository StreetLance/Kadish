import  Vue from 'vue';
import Vuex from 'vuex';
import Storedata from './store/store';
import router from './routers.js';

require('./bootstrap');
Vue.use(Vuex);
const store = new Vuex.Store(Storedata);

const app = new Vue({
    el: '#app',
    store,
    router

});
