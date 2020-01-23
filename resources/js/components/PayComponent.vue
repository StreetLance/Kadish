<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-12 ">
                        <!-- Heading -->
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 ">PayPal</h2>
                        <div class="cont">
                            <hr class="hr-light">
                            <!--                            <div id="paypal-button-container"></div>-->
                            <!--<PayPal-->
                                <!--amount="1.00"-->
                                <!--currency="USD"-->
                                <!--:client="credentials"-->
                                <!--:button-style="myStyle"-->
                                <!--env="production"-->
                                <!--@payment-completed="payment_completed_cb"-->
                            <!--&gt;</PayPal>-->
                            <hr class="hr-light">
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
                            <h6 class="mb-0 white-text">{{$t('Pages.Footer')}}</h6>
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
    <!--    <h1 class="text-white">Pay ID:{{ $route.params.id}}</h1>-->

</template>
<script>
    import PayPal from 'vue-paypal-checkout'

    export default {
        data() {
            return {
                credentials: {
                    // sandbox: 'AamvJHqtBfrIM4oNPDknTMJmyC5kN-btQRU5baqABM-YEFktx28e_DDpB4nmXQeHUBJnJufE4hYjVxnB',
                    production: 'AUeEKuSGuBKf1ZVVaSLdXObkXK3-5U-DiXABpfnqXj26am4KABZqO_oSUg_liTQ1iQwDcMqN0R1ZzxpC'
                    // production: 'Adwxz1ebdstxTBHR5fkZdlQDiq4DuG84fkqg1iov0Dne6nTzxo2uazlOBkqCYIrbXD1YJ7Xq8p2Qz4g9'
                },
                braintreeSdk: window.braintree,
                myStyle: {
                    label: 'pay',
                    size: 'medium',
                    shape: 'pill',
                    color: 'blue'
                }
            }
        },
        comments: {
            PayPal
        },
        methods: {
            payment_completed_cb(res) {
                this.$router.push({name: 'Thank'})
                // axios.put('api/kadish/'+ this.$route.params.id ,  {
                //     params: {
                //         Name: res.payer.payer_info.first_name,
                //         Last_Name: res.payer.payer_info.last_name,
                //     }});
                console.log(res.payer.payer_info);
            },
        },
        mounted() {
            console.log(this.$route.params.id);
        }
    }
</script>

<style scoped>
    .cont {
        background-color: #1d2124;
        opacity: 0.8;
        width: 600px;
    }

    @media (max-height: 1000px) {
        #intro {
            height: 100%;
        }

        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
    }

    @media (max-width: 850px) {
        #intro {
            height: 100%;
        }

        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
    }

    @media (max-width: 760px) {
        #intro {
            height: 100%;
        }
    }

    @media (max-width: 660px) {
        #intro {
            height: 100%;
        }
    }

    @media (max-width: 350px) {
        #intro {
            height: 100%;
        }
    }

    @media (max-height: 750px) {
        #intro {
            height: 100%;
        }
    }

    @media (max-width: 238px) {
        #intro {
            height: 100%;
        }

        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }

        dl, ol, ul {
            margin-top: 0;
            margin-bottom: 1rem;
            font-size: 13px;
        }
    }
</style>
