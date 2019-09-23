<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <!--Mask-->
            <div class="container-fluid d-flex align-items-top justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center mt-5 pt-5">
                    <div class="col-md-10">
                        <!-- Heading -->
                        <span class="logo-separate white-text " v-bind:class="'fa-1x'"></span>
                        <!-- Divider -->
                        <!-- Description -->
                        <div class="row justify-content-center text-center">
                            <div class="col-md-12">
                                <h4 class="white-text my-4 ">{{$t('Pages.Index.Title')}}</h4>
                                <h5 class="white-text my-4 ">{{$t('Pages.Index.Body')}}</h5>
                            </div>
                        </div>
                        <section class="mb-4 white-text " ><!--Section heading-->
                            <div class="row d-flex justify-content-center">
                                <!--Grid column-->
                                <div class="col-lg-12 mb-md-0 mb-5 border-light">


                                    <div class="form-content">
                                        <form method="post" action="_frame_handler.php">
                                            <div class="fields-wr row">
                                                <div class="field-wr halfwidth divider col-md-6">
                                                    <div class="I"><input type="text" name="nameOfPassing"
                                                                          :placeholder="$t('Button.NameD')" v-model="Form.Name_of_Deceased" valid="com" required>
                                                        <div class="error-mess">Incorrect Data</div>
                                                    </div>
                                                </div>
                                                <hr class="mobile">
                                                <div class="field-wr halfwidth col-md-6">
                                                    <div class="I"><input type="text" name="nameOfFather"
                                                                          :placeholder="$t('Button.NameFD')"
                                                                          v-model="Form.Name_Father_Deceased"
                                                                          valid="com" required>
                                                        <div class="error-mess">Incorrect Data</div>
                                                    </div>
                                                </div>
                                                <div class="label col-md-12">{{$t('Button.TitleDP')}}</div>
                                                <div class="loading">
                                                    <div id="ddate  ">
                                                        <input type="hidden" name="type" value="greg" required>
                                                        <div class="field-wr ddate col-md-3 bot-np">
                                                            <div class="I">
                                                                <input type="text" name="ddate_date"
                                                                       placeholder="Date..." value="16" min="1" max="31"
                                                                       id="ddate_date"
                                                                       v-model="Param.Day" required>
                                                                <div class="error-mess">Incorrect Date</div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wr dmnth col-md-3 bot-np">
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
                                                        <div class="field-wr dyear col-md-2 bot-np">
                                                            <div class="I">
                                                                <input type="text" name="ddate_year"
                                                                       placeholder="Year..." value="2019" min="1869"
                                                                       max="2019" id="ddate_year"
                                                                       v-model="Param.Year" required>
                                                            </div>
                                                        </div>

                                                        <div class="field-wr dsuns col-md-4 bot-np" >
                                                            <div class="row pl-4" v-show="show">
                                                                <div class="col-md-9 mw np"><label class="checkbox"><input
                                                                    type="checkbox" name="ddate_dsuns" id="ddate_dsuns" v-model="Form.Sunset"><i></i>{{$t('Button.Sunset')}}</label>
                                                                </div>
                                                                <div class="col-md-1 np">
                                                                    <div class="hint">
                                                                        <i>{{$t('Button.TitleSunset')}}</i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wr switch-cal col-md-2 bot-np">
                                                            <div class="I">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="spinner-grow text-warning" role="status" v-show="spiner">
                                                                            <span class="sr-only">Loading...</span></div>
                                                                        <a class="jdate orange-text np" @click="HebrewCal('J')"  v-if="showJ"><span v-html="$t('Button.JewishCal')"></span>
                                                                            <div class="hint right"><i v-html="$t('Button.JewishTitle')"></i></div>
                                                                        </a>
                                                                        <a class="jdate  orange-text np" @click="HebrewCal('G')"  v-else><span v-html="$t('Button.JewishCal2')"></span>
                                                                            <div class="hint right"><i>{{$t('Button.JewishTitle2')}}</i></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>

                                                <div class="field-wr top-np halfwidth divider lastline">
                                                    <div class="I"><input type="text" name="email"
                                                                          :placeholder="$t('Button.Mail')"
                                                                          v-model="Form.Email"
                                                                          valid="com" minlength="5"
                                                                          maxlength="15" required>
                                                        <div class="error-mess">Incorrect Data</div>
                                                    </div>
                                                </div>
                                                <hr class="mobile">
                                                <div class="field-wr top-np halfwidth lastline">
                                                    <div class="I phone"><input type="text" name="phone"
                                                                                :placeholder="$t('Button.Phone')"
                                                                                valid="com"
                                                                                minlength="5"
                                                                                v-model="Form.Phone"
                                                                                maxlength="15"
                                                                                required>
                                                        <div class="error-mess">Incorrect Data</div>
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
                                <button type="button"  class="field-wr" @click="Kaddish(0)">
                                    {{$t('Button.Button1')}}<b class="free">Free</b></button>
                            </div>
                            <div class="col-md-4 field-wr halfwidth arra ml-4">
                                <button type="button" class="field-wr " @click="Kaddish(1)" >{{$t('Button.Button2')}}<i
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

                Form:{
                    Name_of_Deceased:"",
                    Name_Father_Deceased:"",
                    Email:"",
                    Phone:"",
                    Sunset: false
                },
                Param: {Day: " ", Month: " ", Year: " ", DataSet: "G"},}
        },
        // beforeRouteEnter(to, from, next) {next()},
        mounted(){
            var date = new Date();
            this.Param.Day = date.getDate();
            this.Param.Month = String(date.getMonth() + 1);
            this.Param.Year = date.getFullYear();
        },
        methods: {
            HebrewCal($date) {
                if( this.Param.Day !==" " && typeof this.Param.Day !=='undefined' &&  this.Param.Month !==" " && typeof this.Param.Month !=='undefined' && this.Param.Year !== " " && typeof this.Param.Year !=='undefined'){
                this.spiner= true;
                if($date ==="J"){
                    this.showJ =! this.showJ;
                    this.show =! this.show;
                    this.Param.DataSet = "J";
                }else if($date ==="G"){
                    console.log('this is g')
                    this.showJ = true;
                    this.show = true;
                    this.Param.DataSet = "G";
                }
                    axios.get('api/'+$date+'/'+this.Param.Day+'/'+this.Param.Month+'/'+this.Param.Year).then((response)=>{
                        this.Param.Day = response.data.day;
                        this.Param.Month = response.data.month;
                        this.Param.Year = response.data.year;
                        this.spiner= false;
                    });
                }
            },
          async Kaddish($order){
                let Sunset
              (this.Form.Sunset === false) ?  Sunset =0 : Sunset= 1;
                          await axios.get('api/kadish/create',{params:{
                                      Name_of_Deceased: this.Form.Name_of_Deceased,
                                      Name_Father_Deceased: this.Form.Name_Father_Deceased,
                                      Email: this.Form.Email,
                                      Phone: this.Form.Phone,
                                      Sunset: Sunset,
                                  Day: this.Param.Day, Month: this.Param.Month, Year: this.Param.Year, DataSet: this.Param.DataSet,
                                        Order: $order,
                              }}).then((response)=>{
                              console.log(response.data);
                          });

                }

            }

        // watch: {'$route'(to, from) {}},
        // beforeRouteUpdate(to, from, next) {next()}
    }
</script>

<style scoped>
    .field-wr input[type=email][type=tel]{
        text-overflow: ellipsis;
    }
    .field-wr input[type=tel]{
        font: normal 300 18px/26px 'Roboto', sans-serif;
        width: 100%;
        background: none;
        padding: 0 2px;
        color: #fff;
        border: none;
        outline: none;
    }
    label {
        display: inline-block;
        margin-bottom: 0rem;
    }
   .mw{
       max-width: 75%
   }
    .np{
        padding: 0px;
    }
    .top-np{
        padding: 0px 0px 14px 0px;
    }
    .bot-np{
        padding: 14px 0px 0px 0px;
    }
    form {
        font-size: 0;
        font-family: 'Roboto', sans-serif;
        transition: all 0.4s ease;

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
