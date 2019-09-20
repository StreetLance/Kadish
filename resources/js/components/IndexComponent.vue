<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <!--Mask-->
            <div class="container-fluid d-flex align-items-top justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center mt-5 pt-3">
                    <div class="col-md-10">
                        <!-- Heading -->
                        <span class="logo-separate white-text " v-bind:class="[choice ? 'fa-2x' : 'fa-8x']"></span>
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">{{$t('Pages.Index.Name')}}</h2>
                        <!-- Divider -->
                        <hr class="hr-light">
                        <!-- Description -->
                        <div class="row justify-content-center text-center">
                            <div class="col-md-10">
                                <h3 class="white-text my-4 ">{{$t('Pages.Index.Title')}}</h3>
                                <h3 class="white-text my-4 ">{{$t('Pages.Index.Body')}}</h3>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-around">
                            <div class="col-md-4">
                                <button type="button" @click="Inverse" class="btn btn-outline-warning ">
                                    {{$t('Button.Button1')}}<i class="fa fa-book ml-2"></i></button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-outline-warning ">{{$t('Button.Button2')}}<i
                                    class="fab fa-amazon-pay" fa-2x></i></button>
                            </div>
                        </div>
                        <section class="mb-4 white-text mt-5" v-if="choice"><!--Section heading-->
                            <div class="row d-flex justify-content-center">
                                <!--Grid column-->
                                <div class="col-lg-9 mb-md-0 mb-5 border-light">
                                    <div class="form-content">
                                        <form method="post" action="_frame_handler.php">
                                            <div class="fields-wr row">
                                                <div class="field-wr halfwidth divider col-md-6">
                                                    <div class="I"><input type="text" name="nameOfPassing"
                                                                          :placeholder="$t('Button.NameD')" valid="com">
                                                        <div class="error-mess">Incorrect Data</div>
                                                    </div>
                                                </div>
                                                <hr class="mobile">
                                                <div class="field-wr halfwidth col-md-6">
                                                    <div class="I"><input type="text" name="nameOfFather"
                                                                          :placeholder="$t('Button.NameFD')"
                                                                          valid="com">
                                                        <div class="error-mess">Incorrect Data</div>
                                                    </div>
                                                </div>
                                                <div class="label col-md-12">{{$t('Button.TitleDP')}}</div>
                                                <div class="loading">
                                                    <div id="ddate  ">
                                                        <input type="hidden" name="lang" value="en">
                                                        <input type="hidden" name="type" value="greg">
                                                        <div class="field-wr ddate col-md-3">
                                                            <div class="I">
                                                                <input type="text" name="ddate_date"
                                                                       placeholder="Date..." value="16" min="1" max="31"
                                                                       id="ddate_date"
                                                                       v-model="Param.Day">
                                                                <div class="error-mess">Incorrect Date</div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wr dmnth col-md-3">
                                                            <div class="I">
                                                                <select v-model="Param.Month" class="custom-select custom-select-sm text-white" v-if="showJ">
                                                                    <option value="1" selected>{{$t('Month.January')}}</option>
                                                                    <option value="2">{{$t('Month.February')}}</option>
                                                                    <option value="3">{{$t('Month.March')}}</option>
                                                                    <option value="4">{{$t('Month.April')}}</option>
                                                                    <option value="5">{{$t('Month.May')}}</option>
                                                                    <option value="6">{{$t('Month.June')}}</option>
                                                                    <option value="7">{{$t('Month.July')}}</option>
                                                                    <option value="8">{{$t('Month.August')}}</option>
                                                                    <option value="9">{{$t('Month.September')}}</option>
                                                                    <option value="10">{{$t('Month.October')}}</option>
                                                                    <option value="11">{{$t('Month.November')}}</option>
                                                                    <option value="12">{{$t('Month.December')}}</option>
                                                                </select>
                                                                <select v-model="Param.Month" class="custom-select custom-select-sm text-white" v-else>
                                                                    <option value="1" selected>{{$t('JewishMonth.Tishry')}}</option>
                                                                    <option value="2">{{$t('JewishMonth.Heshvan')}}</option>
                                                                    <option value="3">{{$t('JewishMonth.Kislev')}}</option>
                                                                    <option value="4">{{$t('JewishMonth.Tevet')}}</option>
                                                                    <option value="5">{{$t('JewishMonth.Shevat')}}</option>
                                                                    <option value="6">{{$t('JewishMonth.Adar')}}</option>
                                                                    <option value="7">{{$t('JewishMonth.Adar II')}}</option>
                                                                    <option value="8">{{$t('JewishMonth.Nissan')}}</option>
                                                                    <option value="9">{{$t('JewishMonth.Iyar')}}</option>
                                                                    <option value="10">{{$t('JewishMonth.Sevan')}}</option>
                                                                    <option value="11">{{$t('JewishMonth.Tammuz')}}</option>
                                                                    <option value="12">{{$t('JewishMonth.Av')}}</option>
                                                                    <option value="13">{{$t('JewishMonth.Elul')}}</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="field-wr dyear col-md-2">
                                                            <div class="I">
                                                                <input type="text" name="ddate_year"
                                                                       placeholder="Year..." value="2019" min="1869"
                                                                       max="2019" id="ddate_year"
                                                                       v-model="Param.Year">
                                                            </div>
                                                        </div>

                                                        <div class="field-wr dsuns col-md-4">
                                                            <div class="row pl-4" v-show="show">
                                                                <div class="col-md-9 np"><label class="checkbox"><input
                                                                    type="checkbox" name="ddate_dsuns" id="ddate_dsuns" v-model="Param.Sunset"><i></i>{{$t('Button.Sunset')}}</label>
                                                                </div>
                                                                <div class="col-md-1 np">
                                                                    <div class="hint">
                                                                        <i>{{$t('Button.TitleSunset')}}</i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wr switch-cal col-md-2">
                                                            <div class="I">
                                                                <div class="row">

                                                                    <div class="col-md-12">
                                                                        <div class="spinner-grow text-warning" role="status" v-show="spiner">
                                                                            <span class="sr-only">Loading...</span></div>
                                                                        <a class="jdate" @click="HebrewCal('J')"  v-if="showJ">{{$t('Button.JewishCal')}}
                                                                        <div class="hint right"><i>{{$t('Button.JewishTitle')}}</i></div>
                                                                    </a>
                                                                        <a class="jdate" @click="HebrewCal('G')"  v-else>{{$t('Button.JewishCal2')}}
                                                                            <div class="hint right"><i>{{$t('Button.JewishTitle2')}}</i></div>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mobile">
                                                <hr>
                                                <div class="field-wr halfwidth divider lastline">
                                                    <div class="I"><input type="text" name="email"
                                                                          :placeholder="$t('Button.Mail')" valid="com">
                                                        <div class="error-mess">Incorrect Data</div>
                                                    </div>
                                                </div>
                                                <hr class="mobile">
                                                <div class="field-wr halfwidth lastline">
                                                    <div class="I phone"><input type="text" name="phone"
                                                                                :placeholder="$t('Button.Phone')"
                                                                                valid="com">
                                                        <div class="error-mess">Incorrect Data</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {

        data: function () {
            return {Item: [],
                choice: false,
                show: true,
                showJ: true,
                spiner: false,
                Param: {Day: " ", Month: " ", Year: " ", Sunset: " "},}
        },
        // beforeRouteEnter(to, from, next) {next()},
        methods: {
            HebrewCal($date) {
                this.spiner= true;
                if($date ==="J"){
                    this.showJ =! this.showJ;
                    this.show =! this.show;
                }else if($date ==="G"){
                    this.showJ = true;
                    this.show = true
                }
                        axios.get('api/'+$date+'/'+this.Param.Day+'/'+this.Param.Month+'/'+this.Param.Year).then((response)=>{
                                this.Param.Day = response.data.day;
                                this.Param.Month = response.data.month;
                                this.Param.Year = response.data.year;
                                this.spiner= false;
                        });

            },
            Inverse() {this.choice = !this.choice;},},
        // watch: {'$route'(to, from) {}},
        // beforeRouteUpdate(to, from, next) {next()}
    }
</script>

<style scoped>
    .np{
        padding: 0px;
    }
    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem 1.75rem .375rem .75rem;
        font: normal 300 18px/26px 'Roboto', sans-serif;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: url(data:image/svg+xml,%3csvg xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 4 5' %3e%3cpath fill= '%23343a40' d= 'M2 0L0 2h4zm0 5L0 3h4z' /%3e%3c/svg%3e) no-repeat right .75 rem center / 8 px 10 px;
        background-color: #000000;
        border: 1px solid #423d3d;
        border-radius: .25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    @media (max-width: 1200px) {  #intro {height: 920px;}  }
    @media (min-width: 800px) and (max-width: 850px) {  #intro {height: 996px;}  }
    @media (max-width: 768px) {  #intro {height: 1000px;}  }
    @media (max-width: 660px) {  #intro {height: 1035px;}  }
</style>
