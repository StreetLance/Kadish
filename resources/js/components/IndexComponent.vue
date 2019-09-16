<template>
    <!--Mask-->
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

        <div class="row d-flex justify-content-center text-center">

            <div class="col-md-10">
                <!-- Heading -->
                <span class="logo-separate white-text " v-bind:class="[choice ? 'fa-5x' : 'fa-8x']"></span>
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2" >{{Lang.Title}}</h2>
<!--                &lt;!&ndash;                -->
<!--<i class="fas fa-church fa-10x orange-text"></i>-->
                <!-- Divider -->
                <hr class="hr-light">
                <!-- Description -->
                <h3 class="white-text my-4 " v-for="(item,index) in Item">{{item.Title}}</h3>
                <h3 class="white-text my-4 " v-for="(item,index) in Item">{{item.Body}}</h3>
                <div class="row d-flex justify-content-around">
                    <div class="col-md-4"> <button type="button"  @click="Inverse" class="btn btn-outline-warning ">{{Lang.Button1}}<i class="fa fa-book ml-2"></i></button></div>
                    <div class="col-md-4"><button type="button" class="btn btn-outline-warning ">{{Lang.Button2}}<i class="fab fa-amazon-pay" fa-2x></i></button></div>
                </div>
                    <section class="mb-4 white-text " v-if="choice"><!--Section heading--><div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-lg-9 mb-md-0 mb-5 border-light"><form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                    <!--Grid row-->
                                    <div class="row "><!--Grid column--><div class="col-md-6"><div class="md-form mb-0">
                                                <input type="text" id="name" name="name" class="form-control  white-text">
                                                <label for="name" class=" white-text">{{Lang.NameD}}</label></div>
                                        </div>
                                        <!--Grid column-->
                                        <!--Grid column-->
                                        <div class="col-md-6"><div class="md-form mb-0">
                                                <input type="text" id="fatername" name="fathername" class="form-control  white-text">
                                                <label for="fatername" class=" white-text">{{Lang.NameFD}}</label></div>
                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <!--Grid row-->
                                    <!--Grid row-->
                                    <div class="row"><div class="col-md-2"><div class="md-form mb-0">
                                                <input type="number" id="number" name="number" class="form-control  white-text">
                                                <label for="number" class=" white-text">Day</label></div></div>
                                        <!--Grid column-->
                                        <div class="col-md-3"><div class="md-form"><select class="form-control white-text">
                                                    <option value="" selected>September</option>
                                                    <option value="" ></option>
                                                </select></div></div>
                                        <div class="col-md-2"><div class="md-form mb-0">
                                                <input type="text" id="year" name="year" class="form-control  white-text">
                                                <label for="year" class=" white-text">Year</label></div></div>
                                        <div class="col-md-3"><div class="custom-control custom-checkbox  d-flex align-bottom">
                                                <input type="checkbox" class="custom-control-input" id="After_sunset">
                                                <label class="custom-control-label" for="After_sunset">{{Lang.Sunset}}</label></div></div>
                                        <div class="col-md-2"><div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches">
                                            <label class="custom-control-label" for="customSwitches">Jewish <br>date</label></div></div>
                                    </div>
                                    <div class="row"><div class="col-md-6"><div class="md-form mb-0">
                                                <input type="email" id="email" name="email" class="form-control  white-text">
                                                <label for="email" class=" white-text">{{Lang.Mail}}</label></div></div>
                                        <!--Grid column-->
                                        <div class="col-md-6"><div class="md-form">
                                                <input type="tel" id="tel" name="tel" rows="2" class="form-control md-textarea  white-text">
                                                <label for="tel" class="white-text">{{Lang.Phone}}</label></div>
                                        </div>
                                        </div>
                                    <!--Grid row-->
                                </form>
                                <div class="text-center text-md-left"><a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">{{Lang.Send}}</a></div><div class="status"></div></div><!--Grid column--></div>
                    </section>
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
                        Title:"Kaddish",
                        Button1 :"Remind Yahrzeit",
                        Button2 :"Arrange Kaddish",
                        NameD :"Name of Deceased...",
                        NameFD :"Name of Father of Deceased...",
                        Sunset :"After sunset",
                        Mail :"Your email",
                        Phone :"Phone",
                        Send :"Send"
                    }, ru:{
                        Title:"Каддиш",
                        Button1 :"Напомнить Yahrzeit",
                        Button2 :"Заказать Kaddish",
                        NameD :"Name of Deceased...",
                        NameFD :"Name of Father of Deceased...",
                        Sunset :"После заката",
                        Mail :"Ваша почта",
                        Phone :"Телефон",
                        Send :"Отправить"
                    }}
            }
        },
        beforeRouteEnter (to, from, next) {
            // let test =this.getDate()

             next(vm =>  vm.getDate())
        },
        mounted(){
            this.getDate()
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
                axios.get('/api/v1/'+this.$route.params.lang+'/page/Index').then((response) => {
                    this.Item = response.data;
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
