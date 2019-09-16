<template>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand orange-text disabled" href="#" ><i class="fas fa-star-of-david  orange-text"></i> Kaddish Prayer</a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav mr-auto smooth-scroll">
                <li class="nav-item"></li>
                <li class="nav-item"><router-link class="nav-link" :to="{name: 'H', params: {lang: lang}}">{{Page.Index}}</router-link></li>
                <li class="nav-item"><router-link class="nav-link" :to="{name: 'P', params: {lang: lang}}">{{Page.Price}}</router-link></li>
                <li class="nav-item"><router-link class="nav-link" :to="{name: 'A', params: {lang: lang}}">{{Page.About}}</router-link></li>
                <li class="nav-item"><router-link class="nav-link" :to="{name: 'W', params: {lang: lang}}">{{Page.Wiki}}</router-link></li>
            </ul>
            <select class="browser-default custom-select-sm" v-model="lang" @change="language">
                <option value="en" selected>EN</option>
                <option value="ru" >RU</option>
            </select>
        </div>
        <!-- Collapsible content -->
    </div>
</nav>
</template>
<script>
    export default {
        data:function () {
            return{
                lang: 'en',
                Page:[],
                Pages:{en:{
                            Index :  "Home",
                            About  :"About",
                            Price : "Price",
                            Wiki : "Wiki"
                        },
                    ru:{
                        Index :  "Главная",
                        About  : "Прочее",
                        Price  : "Прайс",
                        Wiki : "Вики"
                    }}}},

        mounted(){
            if(!(this.$route.params.lang ==='ru')){
            this.$router.push({name:"H", params: { lang: "en" }})
            this.Page = this.Pages.en
        }else
            if (!(this.$route.params.lang ==='en') ){
                this.$router.push({name:"H", params: { lang: "ru" }})
                    this.Page = this.Pages.ru
            }
        },

        methods:{
            Langueges(){
                if (this.$route.params.lang ==='en' ){
                    this.Page = this.Pages.en
                    console.log(this.Lang)
                }else if ( this.$route.params.lang ==='ru') {
                    this.Page = this.Pages.ru
                    console.log(this.Lang)
                }
            },
            language(){
                if (this.lang ==='en' ){
                    this.$router.push({name:"H", params: { lang: this.lang }})
                }else if ( this.lang ==='ru') {
                    this.$router.push({name:"H", params: { lang: this.lang }})
                }else {
                        this.$router.push({name:"H", params: { lang: "en" }})
                    }
                }
            },
        // отслеживание извенения в ссылке
        watch: {
            '$route'(to, from) {
                this.Langueges()
            }
        },
    }
</script>
<style scoped></style>
