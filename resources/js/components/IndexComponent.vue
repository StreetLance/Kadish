<template>
    <!--Mask-->
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

        <div class="row d-flex justify-content-center text-center">

            <div class="col-md-10">
                <!-- Heading -->
                <span class="logo-separate white-text " v-bind:class="[choice ? 'fa-5x' : 'fa-8x']"></span>
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2" >{{Lang.Title}}</h2>
<!--                &lt;!&ndash;                -->
<!--<i class="fas fa-church fa-10x orange-text"></i>-->
                <!-- Divider -->
                <hr class="hr-light">
                <!-- Description -->
                <h3 class="white-text my-4 " v-for="(item,index) in Item">{{item.Title}}</h3>
                <h3 class="white-text my-4 " v-for="(item,index) in Item">{{item.Body}}</h3>
                <div class="row d-flex justify-content-around">
                    <div class="col-md-4"> <button type="button"  @click="Inverse" class="btn btn-outline-warning ">{{Lang.Button1}}<i class="fa fa-book ml-2"></i></button></div>
                    <div class="col-md-4"><button type="button" class="btn btn-outline-warning ">{{Lang.Button2}}<i class="fab fa-amazon-pay" fa-2x></i></button></div>
                </div>
                    <section class="mb-4 white-text " v-if="choice"><!--Section heading--><div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-lg-9 mb-md-0 mb-5 border-light">
                                <div class="form-content">
                                    <form method="post" action="_frame_handler.php">
                                        <div class="fields-wr row">
                                            <div class="field-wr halfwidth divider col-md-6"><div class="I"><input type="text" name="nameOfPassing"  :placeholder="Lang.NameD" valid="com"><div class="error-mess">Incorrect Data</div></div></div>
                                            <hr class="mobile">
                                            <div class="field-wr halfwidth col-md-6"><div class="I"><input type="text" name="nameOfFather" :placeholder="Lang.NameFD" valid="com"><div class="error-mess">Incorrect Data</div></div></div>
                                            <div class="label col-md-12">{{Lang.TitleDP}}</div>
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
                                                            <input type="text" :placeholder="Lang.Month" readonly>
                                                            <input type="hidden" name="ddate_month" id="ddate_month">
                                                            <ul><li value="1">January</li><li value="2">February</li><li value="3">March</li><li value="4">April</li><li value="5">May</li><li value="6">June</li><li value="7">July</li><li value="8">August</li><li value="9" class="current">September</li><li value="10">October</li><li value="11">November</li><li value="12">December</li></ul>
                                                        </div>
                                                    </div></div>
                                                    <div class="field-wr dyear col-md-2"><div class="I">
                                                        <input type="text" name="ddate_year" placeholder="Year..." value="2019" min="1869" max="2019" id="ddate_year" onkeypress="return pressNumbers(event);" onblur="checkNumbersRange(this);">
                                                    </div></div>

                                                    <div class="field-wr dsuns col-md-4">
                                                        <div class="row">
                                                            <div class="col-md6"> <label class="checkbox"><input type="checkbox" name="ddate_dsuns" id="ddate_dsuns"><i></i>{{Lang.Sunset}}</label></div>
                                                            <div class="col-md6"><div class="hint"><i>{{Lang.TitleSunset}}</i></div></div>
                                                        </div>


                                                    </div>
                                                    <div class="field-wr switch-cal col-md-2"><div class="I">
                                                        <div class="row">
                                                            <div class="col-md16"> <a href="" class="jdate" >{{Lang.TitleCal}}
                                                                <div class="hint right"
                                                                     onclick="
				$('#ddate').addClass('opacity0').parent().addClass('show');
				$.ajax({
					type: 'POST',
					url: '_get_date_picker.php',
					data: {
						id: 'ddate',
						date: $('#ddate_date').val(),
						month: $('#ddate_month').val(),
						year: $('#ddate_year').val(),
						sunset: $('#ddate_dsuns').is(':checked'),
						type: 'greg',
						lang: $('html').attr('lang')
					},

					async: false,
					success: function(data) {
						setTimeout(function() {
							$('#ddate').html(data).removeClass('opacity0').parent().removeClass('show');
							$('#ddate_month_dd').each(function(q) {
								this.dropdown = new Dropdown(this);
							});
						}, 1000);
					}
				});
				return false;"
                                                                ><i>{{Lang.JewishTitle}}</i></div></a></div>
                                                        </div>

                                                    </div></div>

                                                </div>
                                            </div>
                                            <hr class="mobile">
                                            <hr>
                                            <div class="field-wr halfwidth divider lastline"><div class="I"><input type="text" name="email" :placeholder="Lang.Mail" valid="com"><div class="error-mess">Incorrect Data</div></div></div>
                                            <hr class="mobile">
                                            <div class="field-wr halfwidth lastline"><div class="I phone"><input type="text" name="phone" :placeholder="Lang.Phone" valid="com"><div class="error-mess">Incorrect Data</div></div></div>
                                        </div>


<!--                                        <ul class="stars">-->
<!--                                            <li class="visa"></li>-->
<!--                                            <li class="mastercard"></li>-->
<!--                                            <li class="mcafee"><a href="https://www.mcafeesecure.com/verify?host=kaddish-prayer.com" target="_blank"></a></li>-->
<!--                                            <li class="godaddy"><span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=r1oRkm7mZSkEG4ZVYmlZCuJpSwgmlKvtZc9geFkHSmXxL5fUtiuUoZr2FChQ"></script></span></li>-->
<!--                                        </ul>-->

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
                choice: false,
                Lang:"",
                Button:{
                    en:{
                        Title:"Kaddish",
                        Button1 :"Remind Yahrzeit",
                        Button2 :"Arrange Kaddish",
                        NameD :"Name of Deceased...",
                        NameFD :"Name of Father of Deceased...",
                        Sunset :"After sunset",
                        Month :"Month...",
                        Mail :"Your email",
                        TitleDP :"DATE OF PASSING:",
                        Phone :"Phone",
                        TitleCal :"Jewish date",
                        TitleSunset :"If you register Yahrzeit date according to the Gregorian calendar and the death occurred after sunset — mark this.",
                        JewishTitle :"If you know the jewish date of passing please switch to jewish calendar",
                        Send :"Send"
                    }, ru:{
                        Title:"Каддиш",
                        Button1 :"Напомнить о йорцайт",
                        Button2 :"Заказать кадиш",
                        Month :"Месяц...",
                        NameD :"Имя умершего...",
                        NameFD :"Имя отца умершего...",
                        TitleDP :"",
                        Sunset :"После заката",
                        Mail :"Ваша почта",
                        Phone :"Ваш номер телефона...",
                        TitleCal :"Еврейский календарь",
                        TitleSunset :"Если вы регистрируете дату йорцайт по григорианскому календарю и смерть наступила после захода солнца — отметьте это.",
                        JewishTitle :"Если вы знаете еврейскую дату - переключите на еврейский календарь",
                        Send :"Отправить"
                    }}
            }
        },
        beforeRouteEnter (to, from, next) {
            // let test =this.getDate()
             next(vm =>  vm.getDate())
        },
        mounted(){
            this.getDate()
            this.Langueges()
        },
        methods: {
            Langueges(){
                if (this.$route.params.lang ==='en' ){
                    this.Lang =this.Button.en
                }else if ( this.$route.params.lang ==='ru') {
                    this.Lang =this.Button.ru
                    console.log(this.Lang.TitleSunset)
                }
            },
            Inverse(){
              this.choice= ! this.choice;
            },
            getDate() {
                axios.get('/api/v1/'+this.$route.params.lang+'/page/Index').then((response) => {
                    this.Item = response.data;
                })}
        },
        watch: {
            '$route'(to, from) {
                this.Langueges()
                // this.getDate()
            }
        },
        beforeRouteUpdate(to, from, next) {
            this.Langueges()
            next()
        }
    }
</script>
