<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-10">
                <!-- Heading -->
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2" >{{$t('Pages.Price.Title')}}</h2>
                <div class="cont">
                    <hr class="hr-light">
                    <p class="white-text text-left pl-2" ><span v-html="$t('Pages.Price.Body')"></span></p>
                    <hr class="hr-light">
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
        </div></div>
</template>

<script>
    export default {
        data: function () {return{}} ,
        methods: {},
        // beforeRouteEnter (to, from, next) {next()},
        // beforeRouteUpdate(to, from, next) {next()}
    }
</script>
<style scoped>
    p{font-size: 23px;}
    @media (max-width: 1200px) {  #intro {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 769px;
        }
        p{font-size: 20px;}
    }
    @media  (max-height: 480px) {  #intro {height: 101%;}p{font-size: 18px;}  }
        @media  (max-height: 650px) {#intro {height: 650px;}  p{font-size: 18px;}  }
    @media (max-width: 654px) {  #intro {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 569px;
        }
        p{font-size: 18px;}
    }
    @media (max-width: 860px) {  #intro {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 609px;
        }
        p{font-size: 18px;}
    }
    @media (max-width: 600px) {  #intro {height:101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 469px;
        }
        p{font-size: 18px;}
    }
    @media (max-width: 500px) {  #intro {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 369px;
        }
        p{font-size: 16px;}
    }
    @media (max-width: 360px) {  #intro {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 269px;
        }
        p{font-size: 16px;}
    }
</style>
