<template>
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
</template>

<script>
    export default {
        data: function () {return{}} ,
        beforeRouteEnter (to, from, next) {next()},
        methods: {},
        beforeRouteUpdate(to, from, next) {next()}
    }
</script>
