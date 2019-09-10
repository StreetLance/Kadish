import Vue from 'vue';
import VueRouter from 'vue-router';
import IndexComponent from "./components/IndexComponent";
import AboutComponent from "./components/AboutComponent";
import PriceComponent from "./components/PriceComponent";
import WikiComponent from "./components/WikiComponent";

Vue.use(VueRouter);

export default  new VueRouter({
    routes: [
        {path: '/', component: IndexComponent},
        {path: '/about', component: AboutComponent},
        {path: '/price', component: PriceComponent },
        {path: '/wiki', component: WikiComponent }
    ],
    mode: 'history'

});
