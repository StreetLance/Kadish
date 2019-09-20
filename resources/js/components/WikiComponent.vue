<template>
    <div id="intro" class="view">
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
                                            <p class="text-left ml-5 mr-5 mb-5 mt-5"><span
                                                v-html="$t('Pages.wiki1.Body')"></span></p>
                                            <hr class="hr-light">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="v1" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <h4 id="list-item-2">{{$t('Pages.wiki2.Title')}}</h4>
                                        <div class="cont">
                                            <hr class="hr-light">
                                            <p class="text-right ml-5 mr-5 mb-5 mt-5"><span
                                                v-html="$t('Pages.wiki2.Body')"></span></p>
                                            <hr class="hr-light">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="v2" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <h4 id="list-item-3">{{$t('Pages.wiki3.Title')}}</h4>
                                        <div class="cont">
                                            <hr class="hr-light">
                                            <p class="text-left ml-5 mr-5 mb-5 mt-5"><span
                                                v-html="$t('Pages.wiki3.Body')"></span></p>
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
<!--                                                                                                        <source src="../../../public/media/kaddish_yatom_sfaradic.mp3" type="audio/mpeg">-->
<!--                                                                                                        <source src="../../../public/media/kaddish_yatom_sfaradic.ogg" type="audio/ogg">-->
<!--                                                                                                        <source src="../../../public/media/kaddish_yatom_sfaradic.wav" type="audio/wav">-->
<!--                                                                                                        <source src="../../../public/media/kaddish_yatom_sfaradic.aiff" type="audio/x-aiff">-->
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
<!--                                                                                                        <source src="../../../public/media/kaddish_yatom_ashkenaz.mp3" type="audio/mpeg">-->
<!--                                                                                                        <source src="../../../public/media/kaddish_yatom_ashkenaz.ogg" type="audio/ogg">-->
<!--                                                                                                        <source src="../../../public/media/kaddish_yatom_ashkenaz.wav" type="audio/wav">-->
<!--                                                                                                        <source src="../../../public/media/kaddish_yatom_ashkenaz.aiff" type="audio/x-aiff">-->
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
    </div>
</template>

<script>
    export default {
        data: function () {return{}},
        // beforeRouteEnter (to, from, next) {next()},
        mounted(){},
        methods: {Inverse(){this.choice= ! this.choice;}},
        // watch: {'$route'(to, from) {}},
        // beforeRouteUpdate(to, from, next) {next()}
    }
</script>
<style scoped>
    @media (max-width: 1200px) {  #intro {height: 1065px;}  }

    @media (max-width: 768px) {  #intro {height: 1302px;}  }

    @media (min-width: 800px) and (max-width: 850px) {  #intro {height: 1230px;}  }

    @media (max-width: 660px) {  #intro {height: 1426px;}  }
    /*@media (max-height: 1000px) {  #intro {height: 1006px;}  }*/
</style>
