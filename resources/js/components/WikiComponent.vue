<template>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-10">

                <div class="row pt-5">
                    <div class="col-4 pt-4">
                       <wiki-bar></wiki-bar>
                    </div>
                    <div class="col-8">
                        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example z-depth-1 text-white" >
                            <div v-for="(item,index) in Item">
                                <h4 id="list-item-1">{{item.Title}}</h4>
                                <p><span v-html="item.Body"></span></p>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {

        data: function () {
            return{
                Item:[],
                choice: false,
                Lang:"",
                Button:{
                    en:{
                        Button1 :"Remind Yahrzeit",
                        Button2 :"Arrange Kaddish",
                    }, ru:{
                        Title:"Каддиш",
                        Button1 :"Напомнить Yahrzeit",
                        Button2 :"Заказать Kaddish",
                    }}
            }
        },
        beforeRouteEnter (to, from, next) {
            // let test =this.getDate()

            next(vm =>  vm.getDate())
        },
        mounted(){
            // this.getDate()
            this.Langueges()
        },
        methods: {
            Langueges(){
                if (this.$route.params.lang ==='en' ){
                    this.Lang =this.Button.en
                    console.log(this.Lang)
                }else if ( this.$route.params.lang ==='ru') {
                    this.Lang =this.Button.ru
                    console.log(this.Lang)
                }
            },
            Inverse(){
                this.choice= ! this.choice;
            },
            getDate() {
                axios.get('/api/v1/'+this.$route.params.lang+'/page/Wiki').then((response) => {
                    this.Item = response.data;
                    console.log(this.Item)
                })}
        },
        watch: {
            '$route'(to, from) {
                this.Langueges()
                // this.getDate()
            }
        },
        beforeRouteUpdate(to, from, next) {
            this.Langueges()
            next()
        }
    }
</script>
