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
                                    <div style="text-align: right">
                                        <div class="fb-share-button" data-href="http://kaddish-prayer.com" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkaddish-prayer.com%2F&amp;src=sdkpreparse">Share</a></div>
                                    </div>
                                </div>
                                <!--                    <div class="author"><img src="img/livshits.jpg"><b><?echo$txt['about']['livshits']?></b><i><?echo$txt['about']['title_livshits']?></i></div>-->
                            </div>
                            <p><br><br><br><br><br></p>
                        </div>
                    </div>
                </div>
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
        name: "Thankyou"
    }
</script>

<style scoped>
    .h1, h1 {
        font-size: 1rem;
    }
</style>
