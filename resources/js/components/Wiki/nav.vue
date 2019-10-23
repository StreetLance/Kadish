<template>
    <div class=" col-md-4  mb-5 mt-5">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-Izkor-tab" data-toggle="pill" href="#v0" role="tab" aria-controls="v0" aria-selected="true" @click="change2"><a href="#p0">{{$t('WikiNav.Izkor')}}</a></a>
            <a class="nav-link" id="v-pills-Yorzhat-tab" data-toggle="pill" href="#v1" role="tab" aria-controls="v1" aria-selected="false" @click="change2">  {{$t('WikiNav.Yorzhat')}}</a>
            <a class="nav-link" id="v-pills-Text-tab" data-toggle="pill" href="#v2" role="tab" aria-controls="v2" aria-selected="false" @click="change"> {{$t('WikiNav.Text')}}</a>
            <a class="nav-link" id="v-pills-Kadish-tab" data-toggle="pill" href="#v3" role="tab" aria-controls="v3" aria-selected="false" @click="change3">{{$t('WikiNav.Kadish')}}</a>
            <a class="nav-link" id="v-pills-KadishYS-tab" data-toggle="pill" href="#v4" role="tab" aria-controls="v4" aria-selected="false" @click="change">{{$t('WikiNav.KadishYS')}}</a>
            <a class="nav-link banner small"  href="/en"  v-html="$t('WikiNav.KadishBy')"></a>
        </div>
    </div>
</template>

<script>
    export default {
        data:function () {return{ id: null}},
        mounted(){},
        methods:{
            change : function () {
                if (document.getElementById("intro")) {
                    document.getElementById("intro").id = "intro2"
            } else  if (document.getElementById("intro3")) {
                    document.getElementById("intro3").id = "intro2"
                }

            },
            change2 : function () {
                if (document.getElementById("intro2")) {
                    document.getElementById("intro2").id = "intro"
                } else if (document.getElementById("intro3")) {
                    document.getElementById("intro3").id = "intro"
                }
            },
            change3 : function () {
                if (document.getElementById("intro2")) {
                    document.getElementById("intro2").id = "intro3"
                }else if (document.getElementById("intro")){
                    document.getElementById("intro").id = "intro3"
                }
            }
            },
        // watch: {'$route'(to, from) {}},
    }
</script>

<style scoped></style>
