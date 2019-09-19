<template>
    <!--Mask-->
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

        <div class="row d-flex justify-content-center text-center">

            <div class="col-md-10">
                <!-- Heading -->
                <span class="logo-separate white-text " v-bind:class="[choice ? 'fa-2x' : 'fa-8x']"></span>
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2" >{{$t('Pages.Index.Name')}}</h2>
<!--                &lt;!&ndash;                -->
<!--<i class="fas fa-church fa-10x orange-text"></i>-->
                <!-- Divider -->
                <hr class="hr-light">
                <!-- Description -->
                <h3 class="white-text my-4 " >{{$t('Pages.Index.Title')}}</h3>
                <h3 class="white-text my-4 " >{{$t('Pages.Index.Body')}}</h3>
                <div class="row d-flex justify-content-around">
                    <div class="col-md-4"> <button type="button"  @click="Inverse" class="btn btn-outline-warning ">{{$t('Button.Button1')}}<i class="fa fa-book ml-2"></i></button></div>
                    <div class="col-md-4"><button type="button" class="btn btn-outline-warning ">{{$t('Button.Button2')}}<i class="fab fa-amazon-pay" fa-2x></i></button></div>
                </div>
                    <section class="mb-4 white-text mt-5" v-if="choice"><!--Section heading--><div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-lg-9 mb-md-0 mb-5 border-light">
                                <div class="form-content">
                                    <form method="post" action="_frame_handler.php">
                                        <div class="fields-wr row">
                                            <div class="field-wr halfwidth divider col-md-6"><div class="I"><input type="text" name="nameOfPassing"  :placeholder="$t('Button.NameD')" valid="com"><div class="error-mess">Incorrect Data</div></div></div>
                                            <hr class="mobile">
                                            <div class="field-wr halfwidth col-md-6"><div class="I"><input type="text" name="nameOfFather" :placeholder="$t('Button.NameFD')" valid="com"><div class="error-mess">Incorrect Data</div></div></div>
                                            <div class="label col-md-12">{{$t('Button.TitleDP')}}</div>
                                            <div class="loading">
                                                <div id="ddate  ">
                                                    <input type="hidden" name="lang" value="en">
                                                    <input type="hidden" name="type" value="greg">
                                                    <div class="field-wr ddate col-md-3"><div class="I">
                                                        <input type="text" name="ddate_date" placeholder="Date..." value="16" min="1" max="31" id="ddate_date" onkeypress="return pressNumbers(event);" onblur="checkNumbersRange(this);">
                                                        <div class="error-mess">Incorrect Date</div>
                                                    </div></div>
                                                    <div class="field-wr dmnth col-md-3"><div class="I">
                                                        <div class="dropdown months" name="ddate_month" id="ddate_month_dd">
                                                            <input type="text" :placeholder="$t('Button.Month')" readonly>
                                                            <input type="hidden" name="ddate_month" id="ddate_month">
                                                            <ul><li value="1">January</li><li value="2">February</li><li value="3">March</li><li value="4">April</li><li value="5">May</li><li value="6">June</li><li value="7">July</li><li value="8">August</li><li value="9" class="current">September</li><li value="10">October</li><li value="11">November</li><li value="12">December</li></ul>
                                                        </div>
                                                    </div></div>
                                                    <div class="field-wr dyear col-md-2"><div class="I">
                                                        <input type="text" name="ddate_year" placeholder="Year..." value="2019" min="1869" max="2019" id="ddate_year" onkeypress="return pressNumbers(event);" onblur="checkNumbersRange(this);">
                                                    </div></div>

                                                    <div class="field-wr dsuns col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-6"> <label class="checkbox"><input type="checkbox" name="ddate_dsuns" id="ddate_dsuns"><i></i>{{$t('Button.Sunset')}}</label></div>
                                                            <div class="col-md-6"><div class="hint"><i>{{$t('Button.TitleSunset')}}</i></div></div>
                                                        </div>
                                                    </div>
                                                    <div class="field-wr switch-cal col-md-2"><div class="I">
                                                        <div class="row">
                                                            <div class="col-md16"> <a href="" class="jdate" >{{$t('Button.TitleCal')}}
                                                                <div class="hint right"><i>{{$t('Button.JewishTitle')}}</i></div></a></div>
                                                        </div>
                                                    </div></div>
                                                </div>
                                            </div>
                                            <hr class="mobile">
                                            <hr>
                                            <div class="field-wr halfwidth divider lastline"><div class="I"><input type="text" name="email" :placeholder="$t('Button.Mail')" valid="com"><div class="error-mess">Incorrect Data</div></div></div>
                                            <hr class="mobile">
                                            <div class="field-wr halfwidth lastline"><div class="I phone"><input type="text" name="phone" :placeholder="$t('Button.Phone')" valid="com"><div class="error-mess">Incorrect Data</div></div></div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>

</template>
<script>
    export default {

        data: function () {
            return{
                Item:[],
                Param:{
                    Day:"",
                    Month:"",
                    Year:"",
                    Sunset:""
                },
                choice: false,
            }
        },
        beforeRouteEnter (to, from, next) {next()},
        mounted(){},
        methods: {
            HebrewCal(){},
            Inverse(){this.choice= ! this.choice;},
        },
        watch: {'$route'(to, from) {}},
        beforeRouteUpdate(to, from, next) {next()}
    }
</script>
