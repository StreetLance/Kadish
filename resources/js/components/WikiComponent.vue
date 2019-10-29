<template>
    <div  id="intro1" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-top justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center mt-5 pt-5">
                    <div class="col-md-10">
                        <div class="row d-flex justify-content-center text-center">
                            <wiki-bar></wiki-bar>
                            <div class=" col-md-8 " style="height: 654px;">
                                <div class="tab-content text-white " id="v-pills-tabContent">
                                    <div class="tab-pane fade show active " id="v0" role="tabpanel"
                                         aria-labelledby="v-pills-home-tab">
                                        <h4 id="list-item-1">{{$t('Pages.wiki1.Title')}}</h4>
                                        <div class="cont">
                                            <hr class="hr-light">
                                            <p class="text-left ml-5 mr-5 mb-5 mt-5" id="p0"><span
                                                v-html="$t('Pages.wiki1.Body')"></span></p>
                                            <hr class="hr-light">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="v1" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <h4 id="list-item-2">{{$t('Pages.wiki2.Title')}}</h4>
                                        <div class="cont">
                                            <hr class="hr-light">
                                            <p class="text-left ml-5 mr-5 mb-5 mt-5" id="p1"><span
                                                v-html="$t('Pages.wiki2.Body')"></span></p>
                                            <hr class="hr-light">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="v2" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <h4 id="list-item-3">{{$t('Pages.wiki3.Title')}}</h4>
                                        <div class="cont">
                                            <hr class="hr-light">
                                            <p class="text-right ml-5 mr-5 mb-5 mt-5"><span
                                                v-html="$t('Pages.wiki3.Body')" ></span></p>
                                            <hr class="hr-light">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v3" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <h4 id="list-item-4">{{$t('Pages.wiki4.Title')}}</h4>
                                        <div class="cont">
                                            <hr class="hr-light">
                                            <p class="text-left ml-2 mr-2 mb-5 mt-5"><span
                                                v-html="$t('Pages.wiki4.Body')"></span></p>
                                            <hr class="hr-light">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v4" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <h4 id="list-item-5">{{$t('Pages.wiki5.Title')}}</h4>

                                        <div class="cont">
                                            <hr class="hr-light">
                                            <h4 id="list-item-6">{{$t('Pages.wiki5.Aydio1')}}</h4>
                                            <p>
                                                <audio controls>
                                                    <source src="/media/kaddish_yatom_sfaradic.mp3" type="audio/mpeg">
                                                    <source src="/media/kaddish_yatom_sfaradic.ogg" type="audio/ogg">
                                                    <source src="/media/kaddish_yatom_sfaradic.wav" type="audio/wav">
                                                    <source src="/media/kaddish_yatom_sfaradic.aiff"
                                                            type="audio/x-aiff">
                                                    <object>
                                                        <param name="autostart" value="true">
                                                        <param name="src"
                                                               value="../../../public/media/kaddish_yatom_sfaradic.mp3">
                                                        <param name="autoplay" value="true">
                                                        <param name="controller" value="false">
                                                        <embed src="../../../public/media/kaddish_yatom_sfaradic.mp3"
                                                               controller="true" autoplay="false" autostart="false"
                                                               type="audio/mpeg">
                                                    </object>
                                                </audio>
                                            </p>
                                            <hr class="hr-light">
                                            <h4 id="list-item-7">{{$t('Pages.wiki5.Aydio2')}}</h4>
                                            <p>
                                                <audio controls>
                                                    <source src="/media/kaddish_yatom_ashkenaz.mp3" type="audio/mpeg">
                                                    <source src="/media/kaddish_yatom_ashkenaz.ogg" type="audio/ogg">
                                                    <source src="/media/kaddish_yatom_ashkenaz.wav" type="audio/wav">
                                                    <source src="/media/kaddish_yatom_ashkenaz.aiff"
                                                            type="audio/x-aiff">
                                                    <object>
                                                        <param name="autostart" value="true">
                                                        <param name="src"
                                                               value="../../../public/media/kaddish_yatom_ashkenaz.mp3">
                                                        <param name="autoplay" value="true">
                                                        <param name="controller" value="false">
                                                        <embed src="../../../public/media/kaddish_yatom_ashkenaz.mp3"
                                                               controller="true" autoplay="false" autostart="false"
                                                               type="audio/mpeg">
                                                    </object>
                                                </audio>
                                            </p>
                                            <hr class="hr-light">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        data: function () {return{}},
        // beforeRouteEnter (to, from, next) {next()},
        mounted(){},
        methods: {
            Inverse(){this.choice= ! this.choice;},
            },
        // watch: {'$route'(to, from) {}},
        // beforeRouteUpdate(to, from, next) {next()}
    }
</script>
<style scoped>
    .cont {
        background-color: #1d2124;
        opacity: 0.8;
        width: 860px;
    }
    #intro {height: 100%;}
    #intro1 {height: 100%;}
    #intro2 {height: 100%;}
    #intro3 {height: 100%;}

    @media (max-width: 1380px) {  #intro {height: 1065px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 758px;
        }
    }
    @media (max-width: 1200px) {  #intro {height: 1110px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 698px;
        }
    }
    @media (max-width: 1000px) {  #intro {height: 1410px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 560px;
        }
    }

    @media   (max-width: 850px) {  #intro {height: 1630px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 480px;
        }
    }
    @media (max-width: 770px) {  #intro {height: 1618px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 660px) {  #intro {height: 1921px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 530px) {  #intro {height: 2125px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 470px) {  #intro {height: 2652px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
        @media (max-width: 390px) {  #intro {height: 3775px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 3000px;
        }
        }
    @media (max-width: 1380px) {  #intro1 {height: 1065px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 758px;
        }
    }
    @media (max-width: 1200px) {  #intro1 {height: 1110px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 698px;
        }
    }
    @media (max-width: 1000px) {  #intro1 {height: 1410px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 560px;
        }
    }

    @media   (max-width: 850px) {  #intro1 {height: 1630px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 480px;
        }
    }
    @media (max-width: 770px) {  #intro1 {height: 1618px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 660px) {  #intro1 {height: 1715px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 530px) {  #intro1 {height: 1815px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 470px) {  #intro1 {height: 2252px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 390px) {  #intro1 {height: 3000px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 3000px;
        }
    }
    @media (max-width: 1380px) {  #intro2 {height: 1000px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 758px;
        }
    }
    @media (max-width: 1200px) {  #intro2 {height: 1000px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 698px;
        }
    }
    @media (max-width: 1000px) {  #intro2 {height: 1000px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 560px;
        }
    }

    @media   (max-width: 850px) {  #intro2 {height:1000px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 480px;
        }
    }
    @media (max-width: 770px) {  #intro2 {height: 1000px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 660px) {  #intro2 {height: 1000px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 530px) {  #intro2 {height: 1000px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 470px) {  #intro2 {height:  1300px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 1380px) {  #intro3 {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 758px;
        }
    }
    @media (max-width: 1200px) {  #intro3 {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 698px;
        }
    }
    @media (max-width: 1000px) {  #intro3 {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 560px;
        }
    }

    @media   (max-width: 850px) {  #intro3 {height: 101%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 480px;
        }
    }
    @media (max-width: 770px) {  #intro3 {height: 101%px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 660px) {  #intro3 {height: 1252px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 530px) {  #intro3 {height: 1352px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
    @media (max-width: 470px) {  #intro3 {height: 2088px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 100%;
        }
    }
</style>
