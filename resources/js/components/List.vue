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
                                <ul class="text-white">
                                    <li  v-for="(item, index) in items">{{item.Name_of_Deceased}} ben(bat) {{item.Fathers_Name}}</li>
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
        data:function (){
            return {
                items: "",
            }
            },
        mounted() {
            axios.get(' http://kadish/api/kadish').then( response=>{
                this.items = response.data;
                cosole.log(response);
            }).catch(error => {
                console.log(error);
            });
        },
    }
</script>

<style scoped>
    @media (max-height: 1000px){
        #intro {height: 950px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
    }
    @media (max-width: 850px) {
        #intro {height: 1162px;}
        .cont {
            background-color: #1d2124;
            opacity: 0.8;
            width: 600px;
        }
    }

    @media (max-width: 760px) {  #intro {height: 1460px;}
    }

    @media (max-width: 660px) {#intro {height: 1635px;}
    }
    @media (max-width: 350px) {#intro {height: 9000px;}
    }
    @media (max-height: 750px) {#intro {height: 750px;}
    }
    @media (max-width: 238px) {#intro {height: 7000px;}
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
