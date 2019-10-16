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
                                <ul>
                                    <li></li>
                                </ul>
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
        // data:function (){return ;},
        mounted() {
            axios.get(' http://kadish/api/kadish').then( response=>{
                console.log(response);
            }).catch(error => {
                console.log(error);
            });
        },
    }
</script>

<style scoped>

</style>
