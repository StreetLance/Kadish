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
            <footer class="page-footer font-small unique-color-dark mt-5">
                <!-- Social buttons -->
                <div class="unique-color-dark">
                    <div class="container">
                        <!--Grid row-->
                        <div class="row py-4 d-flex align-items-center">
                            <!--Grid column-->
                            <div class="col-md-6 col-lg-7 text-center text-md-right">
                                <h6 class="mb-0 white-text">{{$t('Pages.Footer')}}</h6>
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
        mounted() {
            // var date = new Date();
            // this.Param.Day = date.getDate();
            // this.Param.Month = String(date.getMonth() + 1);
            // this.Param.Year = date.getFullYear();

            // axios.get('api/kadish').then( (response)=>{
            //     console.log(response);
            // });
        },
    }
</script>
<style scoped>
    p{font-size: 16px;}
    #intro {height: 100%;}
    .view .mask {
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        width: 100%;
        height: 100%;
        background-attachment: fixed;
    }
    @media (max-width: 1300px) {  p{font-size: 14px;}  }
    @media (max-width: 1200px) {  #intro {height: 1230px;}  }
    @media (min-width: 800px) and (max-width: 850px) {  #intro {height: 1359px;}  }
    @media (max-width: 768px) {  #intro {height: 1180px;}  }
    @media (max-width: 660px) {  #intro {height: 1381px;}  }
    @media (max-width: 500px) {  #intro {height: 1850px;}  }
    @media (max-height: 970px) {  #intro {height: 1471px;}  }
</style>
