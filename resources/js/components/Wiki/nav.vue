<template>
    <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action " href="#list-item-1">{{Article.Izkor}}</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">{{Article.Yorzhat}}</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">{{Article.Text}}</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">{{Article.KadishZS}}</a>
    </div>
</template>

<script>
    export default {
        data:function () {
            return{
                lang: 'en',
                Article:[],
                Wiki:{en:{
                        Izkor :  "",
                        Yorzhat  : "",
                        Text  : "",
                        KadishZS : ""
                    },
                    ru:{
                        Izkor :  "Изкор",
                        Yorzhat  : "Что такое йорцайт",
                        Text  : "Текст молитвы кадиш на иврите",
                        KadishZS : "Значение и смысл молитвы кадиш"
                    }}}},

        mounted(){
        },

        methods:{
            Langueges(){
                if (this.$route.params.lang ==='en' ){
                    this.Article = this.Wiki.en
                    console.log(this.Lang)
                }else if ( this.$route.params.lang ==='ru') {
                    this.Article = this.Wiki.ru
                    console.log(this.Lang)
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

<style scoped>

</style>
