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
                <li class="nav-item"><router-link class="nav-link" :to="{name: 'H', params: {lang: lang}}">{{$t('Nav.Index')}}</router-link></li>
                <li class="nav-item"><router-link class="nav-link" :to="{name: 'P', params: {lang: lang}}">{{$t('Nav.Price')}}</router-link></li>
                <li class="nav-item"><router-link class="nav-link" :to="{name: 'A', params: {lang: lang}}">{{$t('Nav.About')}}</router-link></li>
                <li class="nav-item"><router-link class="nav-link" :to="{name: 'W', params: {lang: lang}}">{{$t('Nav.Wiki')}}</router-link></li>
            </ul>
            <div class="lang">

                    <li>
                        <i class="en" ></i>
                    </li>


<!--                    <i class="ru" ></i>-->
            </div>
            <select class="browser-default custom-select-sm " v-model="$i18n.locale">
                <option value="en"  selected><b class="en">English</b></option>
                <option value="ru" ><b class="ru">Русский</b></option>
            </select>
        </div>
        <!-- Collapsible content -->
    </div>
</nav>
</template>
<script>
    export default {
        data:function () {
            return {
                lang: 'en',
            }
        },
        mounted(){

            this.$i18n.locale = this.$route.params.lang;
            this.lang =this.$i18n.locale;
            console.log(this.lang);
        //     if((this.$route.params.lang ==='ru')){
        //     this.$router.push({name:"H", params: { lang: "en" }})
        //
        // }else
        //     if (!(this.$route.params.lang ==='en') ){
        //         this.$router.push({name:"H", params: { lang: "ru" }})
        //             this.Page = this.Pages.ru
        //     }
        },

        // methods:{
        //     language(){
        //         // this.$route.params.lang = this.lang;
        //         console.log(this.lang)
        //         // if (this.lang ==='en' ){
        //         // }else if ( this.lang ==='ru') {
        //         //
        //         // }else {
        //         //     }
        //         // }
        //     },
        //     // watch: {'$route'(to, from) {
        //     //
        //     //     }},
        //     beforeRouteUpdate(to, from, next) {next()}
    // },
    }
</script>
<style scoped></style>
