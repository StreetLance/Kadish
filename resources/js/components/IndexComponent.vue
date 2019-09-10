<template>
    <!--Mask-->
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

        <div class="row d-flex justify-content-center text-center">

            <div class="col-md-10">

                <!-- Heading -->

                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Kaddish</h2>
                <i class="fas fa-church fa-10x orange-text"></i>
                <!-- Divider -->
                <hr class="hr-light">

                <!-- Description -->
                <h4 class="white-text my-4">Please fill in the fields below for ordering kaddish or notify about the upcoming yahrzeit</h4>
                <button type="button" class="btn btn-outline-white">Arrange Kaddish<i class="fa fa-book ml-2"></i></button>

            </div>

        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
