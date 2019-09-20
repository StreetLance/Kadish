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
    p{
        font-size: 23px;
    }
    /*@media (max-width: 1200px) {  #intro {height: 1200px;}  }*/
    @media  (max-height: 480px) {
        #intro {
        height: 600px;
    }
        p{
            font-size: 18px;
        }
    }
    @media (max-width: 654px) {  #intro {height: 730px;}
    }
    /*@media (max-width: 660px) {  #intro {height: 1600px;}  }*/
</style>
