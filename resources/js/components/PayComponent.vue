<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-12 ">
                        <!-- Heading -->
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 "  >PayPal</h2>
                        <div class="cont">
                            <hr class="hr-light">
<!--                            <div id="paypal-button-container"></div>-->
                            <paypal-checkout
                                amount="10.00"
                                currency="USD"
                                :client="credentials"
                                :braintree="braintreeSdk"
                                :button-style="myStyle"
                                env="sandbox"
                                @payment-completed="payment_completed_cb"
                            ></paypal-checkout>
                            <hr class="hr-light">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!--    <h1 class="text-white">Pay ID:{{ $route.params.id}}</h1>-->

</template>
<script>
    export default {
        data () {
            return {
                credentials: {
                    sandbox: 'AamvJHqtBfrIM4oNPDknTMJmyC5kN-btQRU5baqABM-YEFktx28e_DDpB4nmXQeHUBJnJufE4hYjVxnB',
                    production: 'AUeEKuSGuBKf1ZVVaSLdXObkXK3-5U-DiXABpfnqXj26am4KABZqO_oSUg_liTQ1iQwDcMqN0R1ZzxpC'
                },
                braintreeSdk: window.braintree,
                myStyle: {
                    label:  'pay',
                        size:  'medium',
                    shape: 'pill',
                    color: 'blue'
            }
            }
        },

        methods: {
            payment_completed_cb(res){
                // axios.put('api/kadish/'+ this.$route.params.id ,  {
                //     params: {
                //         Name: res.payer.payer_info.first_name,
                //         Last_Name: res.payer.payer_info.last_name,
                //     }});
                // console.log(res.payer.payer_info);
            },
            },
    mounted() {console.log(this.$route.params.id);
        }
    }
</script>

<style scoped>
    .cont {
        background-color: #1d2124;
        opacity: 0.8;
        width: 600px;
    }
    @media (max-height: 1000px){
        #intro {height:  100%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
    }
    @media (max-width: 850px) {
        #intro {height: 100%;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
    }

    @media (max-width: 760px) {  #intro {height: 100%;}
    }

    @media (max-width: 660px) {#intro {height: 100%;}
    }
    @media (max-width: 350px) {#intro {height: 100%;}
    }
    @media (max-height: 750px) {#intro {height:100%;}
    }
    @media (max-width: 238px) {#intro {height: 100%;}
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
