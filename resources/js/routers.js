import Vue from 'vue';
import VueRouter from 'vue-router';
import IndexComponent from "./components/IndexComponent";
import AboutComponent from "./components/AboutComponent";
import PriceComponent from "./components/PriceComponent";
import WikiComponent from "./components/WikiComponent";
import PayComponent from "./components/PayComponent";
import ThankComponent from "./components/Thankyou";
import ListComponent from "./components/List";

Vue.use(VueRouter);

export default  new VueRouter({
    routes: [
        {path: '/:lang', component: IndexComponent, name:"H"},
            // children:[
                {path: '/:lang/about', component: AboutComponent, name:"A"},
                {path: '/:lang/price', component: PriceComponent , name:"P"},
                {path: '/:lang/wiki', component: WikiComponent , name:"W"},
                {path: '/:lang/thankyou', component: ThankComponent , name:"Thank"},
                {path: '/:lang/list', component: ListComponent , name:"L"},
                {path: '/:lang/pay',
                    component: PayComponent ,
                    name:"Pay",
                    props: true},
        {path: '/:lang/*', redirect:"/en" },
        {path: '/*', redirect:"/en" }
    ],
    mode: 'history'

});
