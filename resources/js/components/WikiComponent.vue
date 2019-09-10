<template>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

        <div class="row d-flex justify-content-center text-center">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <h1> {{ welcom }}</h1>
                    </div>
                </div>

            </div>

        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(' mounted.')

        },

        computed:{
            welcom(){
                return this.$store.getters.welcom
            }
        }
    }
</script>
