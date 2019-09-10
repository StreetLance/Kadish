<template>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

        <div class="row d-flex justify-content-center text-center">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        Price
                    </div>
                </div>

            </div>

        </div>

    </div>
</template>

<script>
    export default {
        data: function () {
            return{
                articles:[]
            }
        } ,
        mounted() {
            console.log('Component mounted.')
        },

    }
</script>
