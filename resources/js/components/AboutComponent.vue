<template>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-6 ">
                <!-- Heading -->


                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 "  v-for="(item,index) in Item">{{item.Title}}</h2>
                <div id="cont">
                    <hr class="hr-light">
                    <p class="white-text text-left pl-2" v-for="(item,index) in Item" ><span v-html="item.Body"></span></p>
                    <hr class="hr-light">
                </div>


                <!--                &lt;!&ndash;                -->
                <!--<i class="fas fa-church fa-10x orange-text"></i>-->
                <!-- Divider -->

                <!-- Description -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                Item: []
            }
        },

        methods: {

            getDate() {
                axios.get('/api/v1/'+this.$route.params.lang+'/page/About').then((response) => {
                    this.Item = response.data;
                })
            }
        },
        beforeRouteEnter (to, from, next) {
                next(vm => vm.getDate())
        },
        beforeRouteUpdate(to, from, next) {
            this.getDate()
            next()
        }
    }
</script>
