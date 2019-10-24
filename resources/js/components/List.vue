<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-8 ">
                        <!-- Heading -->
<!--                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 "  >{{$t('Pages.About.Title')}}</h2>-->
                        <div class="cont">
                            <hr class="hr-light">
                                <ul class="text-white">
                                    <li  v-for="(item, index) in items">{{item.Name_of_Deceased}} ben(bat) {{item.Fathers_Name}}</li>
                                </ul>
                            <hr class="hr-light">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer font-small unique-color-dark mt-5">
            <!-- Social buttons -->
            <div class="unique-color-dark">
                <div class="container">
                    <!--Grid row-->
                    <div class="row py-4 d-flex align-items-center">
                        <!--Grid column-->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                            <h6 class="mb-0 white-text">© All rights reserved. Contact us: info@kaddish-prayer.com | Refund policy</h6>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
            </div>
            <!-- Social buttons -->
            <!-- Copyright -->
        </footer>
    </div>
</template>

<script>
    export default {
        data:function (){
            return {
                items: "",
            }
            },
        mounted() {
            axios.get(' http://149.28.51.36/api/kadish').then( response=>{
                this.items = response.data;
                cosole.log(response);
            }).catch(error => {
                console.log(error);
            });
        },
    }
</script>

<style scoped>
    @media (max-height: 1000px){
        #intro {height: 950px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
    }
    @media (max-width: 850px) {
        #intro {height: 1162px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
    }
    @media (max-height: 750px) {#intro {height: 750px;}
    }
    @media (max-width: 238px) {#intro {height: 950px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
        dl, ol, ul {
            margin-top: 0;
            margin-bottom: 1rem;
            font-size: 13px;
        }
    }
</style>
