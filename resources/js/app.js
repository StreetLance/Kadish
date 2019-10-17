import  Vue from 'vue';
import Vuex from 'vuex';
import router from './routers.js';
import VueInternationalization from 'vue-i18n';
import Locale from './vue-i18n-locales.generated';
import Vuelidate from 'vuelidate'
import PayPal from 'vue-paypal-checkout'

require('./bootstrap');
// import Storedata from './store/store';
// import IndexModul from "./store/modules/IModul";
// import AboutModul from "./store/modules/AboutModul";
// import PriceModul from "./store/modules/PriceModul";
// import WikiModul from "./store/modules/WikiModul";

import navbar from "./components/nav-bar";
import Wikinavbar from "./components/Wiki/nav";

Vue.use(Vuelidate);
Vue.use(Vuex);
Vue.use(VueInternationalization);

Vue.component('nav-bar', navbar);
Vue.component('wiki-bar', Wikinavbar);
Vue.component('paypal-checkout', PayPal);
// const store = new Vuex.Store({
//     strict:true,
//     modules:{
//         Index: IndexModul,
//         About: AboutModul,
//         Price: PriceModul,
//         Wiki: WikiModul
//     }
// });

const i18n = new VueInternationalization({
    locale: 'en',
    messages: Locale
});

const app = new Vue({
    el: '#app',
    // store,
    router,
    i18n,
});
