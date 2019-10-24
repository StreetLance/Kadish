<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <!--Mask-->
            <div class="container-fluid d-flex align-items-top justify-content-center mt-5 h-100">
                <div class="row d-flex justify-content-center text-center mt-5 pt-5">
                    <div class="col-md-10">
                        <!-- Heading -->
                        <span class="logo-separate white-text " v-bind:class="'fa-1x'"></span>
                        <!-- Divider -->
                        <!-- Description -->
                        <div class="row justify-content-center text-center">
                            <div class="col-md-12 mv2">
                                <h4 class="white-text my-4 ">{{$t('Pages.Index.Title')}}</h4>
                                <h5 class="white-text my-4 ">{{$t('Pages.Index.Body')}}</h5>
                            </div>
                        </div>
                        <section class="mb-4 white-text "><!--Section heading-->
                            <div class="row d-flex justify-content-center">
                                <!--Grid column-->
                                <div class="col-lg-12 mb-md-0 mb-5 border-light">


                                    <div class="form-content">
                                        <form method="post" action="_frame_handler.php">
                                            <div class="fields-wr row">
                                                <div class="field-wr halfwidth divider col-md-6">
                                                    <div class="I " :class="{ 'form-group--error': $v.Form.Name_of_Deceased.$error }">
                                                        <input type="text" name="nameOfPassing"
                                                                          :placeholder="$t('Button.NameD')"
                                                               v-model.trim="Form.Name_of_Deceased"
                                                               @input="delayTouch($v.Form.Name_of_Deceased)">
                                                        <div class="error-mess " v-if="!$v.Form.Name_of_Deceased.required">{{$t('Form.required')}}</div>-->
                                                        <div class="error-mess" v-if="!$v.Form.Name_of_Deceased.minLength"> {{$t('Form.minLength')}} 2</div>
                                                        <div class="error-mess" v-if="!$v.Form.Name_of_Deceased.maxLength"> {{$t('Form.maxLength')}} 15</div>
                                                    </div>
                                                </div>
                                                <hr class="mobile">
                                                <div class="field-wr halfwidth col-md-6">
                                                    <div class="I" :class="{ 'form-group--error': $v.Form.Name_Father_Deceased.$error }"><input type="text" name="nameOfFather"
                                                                          :placeholder="$t('Button.NameFD')"
                                                                          v-model.trim="Form.Name_Father_Deceased"
                                                                          valid="com" @input="delayTouch($v.Form.Name_Father_Deceased)">
                                                        <div class="error-mess" v-if="!$v.Form.Name_Father_Deceased.required">{{$t('Form.required')}}</div>
                                                        <div class="error-mess" v-if="!$v.Form.Name_Father_Deceased.minLength"> {{$t('Form.minLength')}} 2</div>
                                                        <div class="error-mess" v-if="!$v.Form.Name_Father_Deceased.maxLength"> {{$t('Form.maxLength')}} 15</div>
                                                    </div>
                                                </div>
                                                <div class="label col-md-12">{{$t('Button.TitleDP')}}</div>
                                                <div class="loading ">
                                                    <div id="ddate">
                                                        <div class="field-wr ddate col-md-3 bot-np">
                                                            <div class="I" :class="{ 'form-group--error': $v.Param.Day.$error }">
                                                                <input type="text" name="ddate_date"
                                                                       placeholder="Date..."
                                                                       id="ddate_date"
                                                                       v-model.trim="Param.Day" @input="delayTouch($v.Param.Day)">
                                                                <div class="error-mess" v-if="!$v.Param.Day.required">{{$t('Form.required')}}</div>
                                                                <div class="error-mess" v-if="!$v.Param.Day.minLength"> {{$t('Form.minLength')}} 2</div>
                                                                <div class="error-mess" v-if="!$v.Param.Day.maxLength"> {{$t('Form.maxLength')}} 15</div>
                                                                <div class="error-mess" v-if="!$v.Param.Day.numeric"> {{$t('Form.numeric')}}.</div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wr dmnth col-md-3 bot-np">
                                                            <div class="I" :class="{ 'form-group--error': $v.Param.Month.$error }">
                                                                <select v-model.trim="Param.Month" class="custom-select custom-select-sm text-white" v-if="showJ">
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
                                                                <select v-model.trim="Param.Month" class="custom-select custom-select-sm text-white" v-else>
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
                                                                    <option value="13">{{$t('JewishMonth.Elul')}}
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="field-wr dyear col-md-2 bot-np">
                                                            <div class="I" :class="{ 'form-group--error': $v.Param.Year.$error }">
                                                                <input type="text" class="pp" name="ddate_year"
                                                                       placeholder="Year..." value="2019" min="1869"
                                                                       max="2019" id="ddate_year"
                                                                       v-model.trim="Param.Year"
                                                                       @input="delayTouch($v.Param.Year)">
                                                                <div class="error-mess" v-if="!$v.Param.Year.required">{{$t('Form.required')}}</div>
<!--                                                                <div class="error-mess" v-if="!$v.Param.Year.between">{{$v.Param.Year.$params.between.min}}-{{$v.Param.Year.$params.between.max}}</div>-->
                                                                <div class="error-mess" v-if="!$v.Param.Year.numeric"> {{$t('Form.numeric')}}.</div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wr dsuns col-md-4 bot-np">
                                                            <div class="row pl-4" v-show="show">
                                                                <div class="col-md-9 mw np"><label
                                                                    class="checkbox fs"><input
                                                                    type="checkbox" name="ddate_dsuns" id="ddate_dsuns"
                                                                    v-model.trim="Form.Sunset"><i></i>{{$t('Button.Sunset')}}
                                                                    <div class="hint">
                                                                        <i>{{$t('Button.TitleSunset')}}</i></div>
                                                                </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wr switch-cal col-md-2 bot-np">
                                                            <div class="I">
                                                                <div class="row">
                                                                    <div class="col-md-12 pr-4">

                                                                        <a class="jdate orange-text np"
                                                                           @click="HebrewCal('J')" v-if="showJ">
                                                                            <div class="spinner-grow text-warning pl-5" role="status" v-show="spiner">
                                                                            <span class="sr-only">Loading...</span>
                                                                        </div>
                                                                            <span
                                                                            v-html="$t('Button.JewishCal')"></span>
                                                                            <div class="hint right pr-2"><i
                                                                                v-html="$t('Button.JewishTitle')"></i>

                                                                            </div>

                                                                        </a>
                                                                        <a class="jdate  orange-text np"
                                                                           @click="HebrewCal('G')" v-else>
                                                                            <div class="spinner-grow text-warning pl-5" role="status" v-show="spiner">
                                                                                <span class="sr-only">Loading...</span>
                                                                            </div>
                                                                            <span
                                                                            v-html="$t('Button.JewishCal2')"></span>
                                                                            <div class="hint right pr-2"><i>{{$t('Button.JewishTitle2')}}</i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>

                                                <div class="field-wr top-np halfwidth divider lastline">
                                                    <div class="I" :class="{ 'form-group--error': $v.Form.Email.$error }"><input type="text" name="email"
                                                                          :placeholder="$t('Button.Mail')"
                                                                          v-model.trim="Form.Email"
                                                                           @input="delayTouch($v.Form.Email)">
                                                         <div class="error-mess" v-if="!$v.Form.Email.required">{{$t('Form.required')}}</div>
                                                        <div class="error-mess" v-if="!$v.Form.Email.minLength"> {{$t('Form.minLength')}} 2</div>
                                                        <div class="error-mess" v-if="!$v.Form.Email.maxLength"> {{$t('Form.maxLength')}} 15</div>
                                                         <div class="error-mess" v-if="!$v.Form.Email.email"> {{$t('Form.email')}}</div>
                                                    </div>
                                                </div>
                                                <hr class="mobile">
                                                <div class="field-wr top-np halfwidth lastline">
                                                    <div class="I phone" :class="{ 'form-group--error': $v.Form.Phone.$error }">
                                                        <input type="text" name="phone"
                                                                                :placeholder="$t('Button.Phone')"
                                                                                valid="com"
                                                                                v-model.trim="Form.Phone" @input="delayTouch($v.Form.Phone)">
                                                        <div class="error-mess" v-if="!$v.Form.Phone.required">{{$t('Form.required')}}</div>
                                                        <div class="error-mess" v-if="!$v.Form.Phone.minLength"> {{$t('Form.minLength')}} 2</div>
                                                        <div class="error-mess" v-if="!$v.Form.Phone.maxLength"> {{$t('Form.maxLength')}} 15</div>
                                                        <div class="error-mess" v-if="!$v.Form.Phone.numeric"> {{$t('Form.numeric')}}.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="row d-flex justify-content-center form-but-wr ">
                            <div class="col-md-4 field-wr halfwidth rmnd ml-3">
                                <button type="button" class="field-wr" @click="Kaddish(0)">
                                    {{$t('Button.Button1')}}<b class="free">Free</b></button>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4 field-wr halfwidth arra ml-4">
                                <button type="button" class="field-wr " @click="Kaddish(1)">{{$t('Button.Button2')}}<i
                                    class="fab fa-amazon-pay" fa-2x></i></button>
                            </div>
                        </div>
                        <ul class="stars">
                            <li class="visa"></li>
                            <li class="mastercard"></li>
                            <li class="mcafee"><a
                                href="https://www.mcafeesecure.com/verify?host=kaddish-prayer.com"
                                target="_blank"></a></li>
                            <li class="godaddy"><span id="siteseal"></span>
                            </li>
                        </ul>

<div class="row mt-5">
    <ul class="plaques" id="plaques-placeholder col-md-12">
        <li class="plaque ">
            <div class="plaque-content">
                <h2>Rabinovich<br>Reuven Shimon<br>ben Levi Yehuda Naftali</h2>
                <p>12 Teveta 5612<br>23 December 1882</p>
                <p>9 Av 5732<br>17 July 2002</p>
            </div>
        </li>
        <li class="plaque">
            <div class="plaque-content">
                <h2>Rabinovich<br>Reuven Shimon<br>ben Levi Yehuda Naftali</h2>
                <p>12 Teveta 5612<br>23 December 1882</p>
                <p>9 Av 5732<br>17 July 2002</p>
            </div>
        </li>
    </ul>
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
                            <h6 class="mb-0 white-text">© All rights reserved. Contact us: info@kaddish-prayer.com | Refund policy</h6>
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
</template>
<script>
    import { required, minLength,email,numeric,maxLength,between } from 'vuelidate/lib/validators';
    const touchMap = new WeakMap();
    export default {

        data: function () {
            return {
                Item: [], choice: false, show: true, showJ: true, spiner: false,
                Form: {Name_of_Deceased: "", Name_Father_Deceased: "", Email:"", Phone: "", Sunset: false},
                Param: {Day: "", Month:"", Year: "", DataSet: "G"},
            }
        },
        validations: {
            Form: {
                Name_of_Deceased: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(50),
                },
                Name_Father_Deceased: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(50),
                },
                Email: {
                    required,
                    minLength: minLength(4),
                    maxLength: maxLength(50),
                    email,
                },
                Phone: {
                    required,
                    minLength: minLength(4),
                    maxLength: maxLength(50),
                    numeric,
                }},
            Param: {
                Day: {
                    required,
                    minLength: minLength(1),
                    maxLength: maxLength(50),
                    numeric
                },
                Month: {
                    required
                },
                Year:{
                    required,
                    // between: between(1869, 2019),
                    numeric
                }},
        },
        mounted() {
            var date = new Date();
            this.Param.Day = date.getDate();
            this.Param.Month = String(date.getMonth() + 1);
            this.Param.Year = date.getFullYear();
        },
        methods: {
            delayTouch($v) {
                // $v.$touch();
                // if (touchMap.has($v)) {
                //     clearTimeout(touchMap.get($v))
                // }
                // touchMap.set($v, setTimeout($v.$touch, 1000))
            },
            HebrewCal($date) {
                if (!this.$v.Param.$invalid){
                    let month =this.Param.Month;
                    this.Param.Month ="";
                    this.spiner = true;

                    if ($date === "J") { this.showJ = !this.showJ; this.show = !this.show; this.Param.DataSet = "J";}

                    else if ($date === "G") {this.showJ = true;this.show = true;this.Param.DataSet = "G";}

                    axios.get('http://149.28.51.36/api/' + $date + '/' + this.Param.Day + '/' + month + '/' + this.Param.Year).then((response) => {
                        this.Param.Month="";
                        this.Param.Day = response.data.day; this.Param.Month = response.data.month; this.Param.Year = response.data.year; this.spiner = false;
                    });
                } else {this.$v.Param.$touch();}
            },
            async Kaddish($order) {
                if (!this.$v.Form.$invalid && !this.$v.Param.$invalid) {
                    let Sunset;
                    (this.Form.Sunset === false) ? Sunset = 0 : Sunset = 1;
                    await axios.get('api/kadish/create', {
                        params: {
                            Name_of_Deceased: this.Form.Name_of_Deceased,
                            Name_Father_Deceased: this.Form.Name_Father_Deceased,
                            Email: this.Form.Email,
                            Phone: this.Form.Phone,
                            Sunset: Sunset,
                            Day: this.Param.Day,
                            Month: this.Param.Month,
                            Year: this.Param.Year,
                            DataSet: this.Param.DataSet,
                            Lang: this.$route.params.lang,
                            Order: $order,
                        }
                    }).then((response) => {
                        if (response){
                        }
                        if (response.data.order === "0") {
                            this.$router.push({name: 'Thank'})
                        }else{
                            // this.$router.push({name: 'Pay', params: {id: response.data}})
                            this.$router.push({name: 'Pay'})
                        }

                    });
                }else {
                    this.$v.$touch();
                }
            }
        }
    }
</script>

<style scoped>
    .field-wr input[type=email][type=tel] {text-overflow: ellipsis;}
    .field-wr input[type=tel] {
        font: normal 300 18px/26px 'Roboto', sans-serif;
        width: 100%;
        background: none;
        padding: 0 2px;
        color: #fff;
        border: none;
        outline: none;
    }

    label {display: inline-block;margin-bottom: 0rem;}
    .mw {max-width: 75%}
    .np {padding: 0px;}
    .top-np {padding: 0px 0px 14px 0px;}
    .bot-np {padding: 14px 0px 0px 0px;}
    form {
        font-size: 0;
        font-family: 'Roboto', sans-serif;
        transition: all 0.4s ease;
    }
    .mv2 {max-width: 955px;}
    .pp {padding: 0 2px;}
    .fs {font: normal 300 16px/26px 'Roboto', sans-serif;}
    hr {margin-top: 10px;;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0, 0, 0, .1);}
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
        /*border: 1px solid #423d3d;*/
        border-radius: .25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: none;
    }
    #intro{
        height: 1200px;
    }
    @media (max-width: 1200px) {  #intro {height: 1200px;}}
    @media (max-height: 800px){ #intro {height: 950px;}}
    @media (max-width: 850px) {  #intro {height: 1462px;}
        .field-wr.divider .I, .field-wr.dname .I, .field-wr.ddate .I, .field-wr.dmnth .I, .field-wr.dyear .I, .field-wr.cmail .I {border-right: 0px;}
        .row {
            display: -ms-flexbox;
            display: block;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        hr {margin-top: 10px;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0, 0, 0, .1);}
        .field-wr input[type=text], .field-wr label, .field-wr textarea {
            font: normal 300 15px/29px 'Roboto', sans-serif;
            width: 100%;
            background: none;
            /*padding: 0 2px;*/
            color: #fff;
            border: none;
            outline: none;
        }
        .field-wr.dsuns {width: 30%;}
        .field-wr.switch-cal {width: 15%; text-align: right;}
    }

    @media (max-width: 760px) {  #intro {height: 1460px;}
        .field-wr.divider .I, .field-wr.dname .I, .field-wr.ddate .I, .field-wr.dmnth .I, .field-wr.dyear .I, .field-wr.cmail .I {border-right: 0px;}
        .row {
            display: -ms-flexbox;
            display: block;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        hr {margin-top: 0rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0, 0, 0, .1);}
        .field-wr input[type=text], .field-wr label, .field-wr textarea {
            font: normal 300 15px/29px 'Roboto', sans-serif;
            width: 100%;
            background: none;
            /*padding: 0 2px;*/
            color: #fff;
            border: none;
            outline: none;
        }
        .field-wr.dsuns {width: 30%;}
        .field-wr.switch-cal {width: 15%; text-align: right;}
    }

    @media (max-width: 660px) {
        #intro {
            height: 1600px;
        }

        .field-wr.divider .I, .field-wr.dname .I, .field-wr.cmail .I {
            border-right: 0px;
        }

        .field-wr.ddate .I, .field-wr.dmnth .I, .field-wr.dyear .I {
            border: 1px solid #666;
        }

        .row {
            display: -ms-flexbox;
            display: block;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .plaque {display: inline-block; background-color: #000; width: 30%; height: 190px; position: relative; margin: 0; padding: 0; text-align: center; vertical-align: middle;}
        .plaque-content h2 {font-size: 100%; margin: 0; padding: 0; font-weight: 600;}
        .plaque-content p {font-size: 90%; margin: 1em 0 0; padding: 0; color: #fc6; text-align: center !important;}
    }
        @media (max-width: 405px) {#intro {height: 1900px;}
        .field-wr.divider .I, .field-wr.dname .I, .field-wr.cmail .I {border-right: 0px;}
        .field-wr.ddate .I, .field-wr.dmnth .I, .field-wr.dyear .I {border: 1px solid #666;}
        .row {
            display: -ms-flexbox;
            display: block;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        hr {margin-top: 0rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0, 0, 0, .1);}
        .field-wr input[type=text], .field-wr label, .field-wr textarea {
            font: normal 300 15px/29px 'Roboto', sans-serif;
            width: 100%;
            background: none;
            /*padding: 0 2px;*/
            color: #fff;
            border: none;
            outline: none;
        }
        .field-wr.ddate, .field-wr.dmnth, .field-wr.dyear {width: 100%;max-width: 100%;}
        .mw[data-v-754b2df6] {max-width: 100%;}
        .field-wr.dsuns {width: 72%;}
        .field-wr.switch-cal {width: 26%; text-align: right;}
            .plaque {display: inline-block; background-color: #000; width: 30%; height: 190px; position: relative; margin: 0; padding: 0; text-align: center; vertical-align: middle;}
            .plaque-content h2 {font-size: 100%; margin: 0; padding: 0; font-weight: 600;}
            .plaque-content p {font-size: 90%; margin: 1em 0 0; padding: 0; color: #fc6; text-align: center !important;}
    }
    @media (max-width: 350px) {#intro {height: 2000px;}
        .field-wr.divider .I, .field-wr.dname .I, .field-wr.cmail .I {border-right: 0px;}
        .field-wr.ddate .I, .field-wr.dmnth .I, .field-wr.dyear .I {border: 1px solid #666;}
        .row {
            display: -ms-flexbox;
            display: block;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        hr {margin-top: 0rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0, 0, 0, .1);}
        .field-wr input[type=text], .field-wr label, .field-wr textarea {
            font: normal 300 15px/29px 'Roboto', sans-serif;
            width: 100%;
            background: none;
            /*padding: 0 2px;*/
            color: #fff;
            border: none;
            outline: none;

        }
        .field-wr.ddate, .field-wr.dmnth, .field-wr.dyear {width: 100%;max-width: 100%;}
        .mw[data-v-754b2df6] {max-width: 100%;}
        .field-wr.dsuns {width: 72%;}
        .field-wr.switch-cal {width: 26%; text-align: right;}
    .plaque {display: inline-block; background-color: #000; width: 30%; height: 190px; position: relative; margin: 0; padding: 0; text-align: center; vertical-align: middle;}
    .plaque-content h2 {font-size: 100%; margin: 0; padding: 0; font-weight: 600;}
    .plaque-content p {font-size: 90%; margin: 1em 0 0; padding: 0; color: #fc6; text-align: center !important;}
    }
</style>
