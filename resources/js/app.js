import  Vue from 'vue';
import Vuex from 'vuex';
import Storedata from './store/store';
import router from './routers.js';
import IndexModul from "./store/modules/IModul";
import AboutModul from "./store/modules/AboutModul";
import PriceModul from "./store/modules/PriceModul";
import WikiModul from "./store/modules/WikiModul";

require('./bootstrap');
Vue.use(Vuex);
const store = new Vuex.Store({
    strict:true,
    modules:{
        Index: IndexModul,
        About: AboutModul,
        Price: PriceModul,
        Wiki: WikiModul
    }


});

const app = new Vue({
    el: '#app',
    store,
    router
});
