import Vue from 'vue';
import VueRouter from 'vue-router';
import IndexComponent from "./components/IndexComponent";
import AboutComponent from "./components/AboutComponent";
import PriceComponent from "./components/PriceComponent";
import WikiComponent from "./components/WikiComponent";

Vue.use(VueRouter);

export default  new VueRouter({
    routes: [
        {path: '/:lang', component: IndexComponent, name:"H"},
            // children:[
                {path: '/:lang/about', component: AboutComponent, name:"A"},
                {path: '/:lang/price', component: PriceComponent , name:"P"},
                {path: '/:lang/wiki', component: WikiComponent , name:"W"},
            // ]
        {path: '/:lang/*', redirect:"/en" }
    ],
    mode: 'history'

});
