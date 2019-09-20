<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-8 ">
                <!-- Heading -->
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 "  >{{$t('Pages.About.Title')}}</h2>
                <div class="cont">
                    <hr class="hr-light">
                    <p class="white-text text-left pl-2">
                        <span v-html="$t('Pages.About.Body')"></span>
                    </p>
                    <hr class="hr-light">
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</template>

<script>
    export default {
        // data: function () {return {}},
        // methods: {},
        // beforeRouteEnter (to, from, next) {next()},
        // beforeRouteUpdate(to, from, next) {next()}
    }
</script>
<style scoped>
    p{font-size: 16px;}
    /*@media (max-width: 1300px) {  p{font-size: 14px;}  }*/
    @media (max-width: 1200px) {  #intro {height: 1230px;}  }
    @media (min-width: 800px) and (max-width: 850px) {  #intro {height: 1359px;}  }
    @media (max-width: 768px) {  #intro {height: 1180px;}  }
    @media (max-width: 660px) {  #intro {height: 1381px;}  }
</style>
