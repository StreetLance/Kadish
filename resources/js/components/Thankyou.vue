<template>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center mt-5 h-100">
                <div class="row d-flex justify-content-center text-center mt-5 pt-5">
                    <div class="col-md-8 ">
                        <!-- Heading -->
<!--                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 "  >{{$t('Pages.About.Title')}}</h2>-->
                        <div class="cont">
                            <hr class="hr-light">
                            <div class=" white-text form-req-wr">
                                <div class="content-wr">
                                    <div class="thankyou">
                                        <div class="plaque-thankyou"></div>
                                        <h1>{{$t('Thankyou.Thankyou')}}</h1>
                                        <h1>{{$t('Thankyou.Descript')}}</h1>
                                        <h1>{{$t('Thankyou.Mail')}}</h1>
                                        <h1>{{$t('Thankyou.Thankyou_Kaddish')}}</h1>
                            <p><a href="/" class="button">{{$t('Thankyou.ToHome')}}</a></p>
                            <div class="quote-wr">
                                <div class="quote">
                                    {{$t('Thankyou.quote')}}
<!--                                    <div style="text-align: right">-->
<!--                                        <div class="fb-share-button" data-href="http://kaddish-prayer.com" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkaddish-prayer.com%2F&amp;src=sdkpreparse">Share</a></div>-->
<!--                                    </div>-->
                                </div>
                                <!--                    <div class="author"><img src="img/livshits.jpg"><b><?echo$txt['about']['livshits']?></b><i><?echo$txt['about']['title_livshits']?></i></div>-->
                            </div>
                        </div>
                    </div>
                </div>
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

</template>

<script>
    export default {
        name: "Thankyou"
    }
</script>

<style scoped>
    .h1, h1 {
        font-size: 1rem;
    }
    #intro {height: 100%;}
    @media (max-width: 1200px) {  #intro {height: 1000px;}  }
    @media (min-width: 800px) and (max-width: 850px) {  #intro {height: 1000px;}  }
    @media (max-width: 768px) {  #intro {height: 1000px;}  }
    @media (max-width: 660px) {  #intro {height: 1000px;}  }
    @media (max-width: 500px) {  #intro {height: 1100px;}  }
</style>
