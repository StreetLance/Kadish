<template>
    <h1 class="text-white">Pay ID:{{ $route.params.id}}</h1>
</template>

<script>
    export default {
        name: "Pay"
    ,mounted() {console.log(this.$route.params.id);
        }
    }
</script>

<style scoped>

</style>
