import Vue from 'vue';
import VueRouter from 'vue-router';
import IndexComponent from "./components/IndexComponent";
import AboutComponent from "./components/AboutComponent";
import PriceComponent from "./components/PriceComponent";
import WikiComponent from "./components/WikiComponent";
import WikiIComponent from "./components/Wiki/IzkorComponent";
import WikiYComponent from "./components/Wiki/YorzhatComponent";
import WikiTComponent from "./components/Wiki/TextCadishComponent";
import WikiKComponent from "./components/Wiki/KadishComponent";

Vue.use(VueRouter);

export default  new VueRouter({
    routes: [
        {path: '/:lang', component: IndexComponent, name:"H"},
            // children:[
                {path: '/:lang/about', component: AboutComponent, name:"A"},
                {path: '/:lang/price', component: PriceComponent , name:"P"},
                {path: '/:lang/wiki', component: WikiComponent , name:"W"},
        {path: '/:lang/wiki/Izor', component: WikiIComponent , name:"WI"},
        {path: '/:lang/wiki/Yorthat', component: WikiYComponent , name:"WY"},
        {path: '/:lang/wiki/TextCadish', component: WikiTComponent , name:"WT"},
        {path: '/:lang/wiki/Kadish', component: WikiKComponent , name:"WK"},
        {path: '/:lang/*', redirect:"/en" }
    ],
    mode: 'history'

});
