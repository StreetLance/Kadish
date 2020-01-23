<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Kaddish Prayer .com">
    <meta name="description" content="Заказать кадиш или напомнить йорцайт">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaddish</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('images/ic/touch-icon-iphone.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/ic/touch-icon-ipad.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/ic/touch-icon-iphone-retina.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/ic/touch-icon-ipad-retina.png')}}">
    <link rel="icon" sizes="192x192" href="{{asset('images/ic/favicon.png')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">

</head>
<body>
<header id="app">
    <!--Navbar-->
            <nav-bar></nav-bar>
    <!--/.Navbar-->


            <transition name="moveInUp">
            <router-view></router-view>
            </transition>
    <!--/.Mask-->
</header>
<!-- Footer -->
{{--<script src="https://unpkg.com/vue"></script>--}}
{{--<script src="https://unpkg.com/vue-paypal-checkout@2.0.0/dist/vue-paypal-checkout.min.js"></script>--}}
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
<script src = " https://unpkg.com/vue " ></script>
{{--<script src = " https://unpkg.com/vue-paypal-checkout@2.0.0/dist/vue-paypal-checkout.min.js "></script>--}}
{{--<script src="https://www.paypal.com/sdk/js?client-id=AamvJHqtBfrIM4oNPDknTMJmyC5kN-btQRU5baqABM-YEFktx28e_DDpB4nmXQeHUBJnJufE4hYjVxnB">--}}
{{--</script>--}}


{{--<script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script>--}}
{{--<script async="" src="https://www.google-analytics.com/analytics.js"></script>--}}
{{--<script async="" src="https://embed.tawk.to/58db6b87f97dd14875f5a9f6/default" charset="UTF-8" crossorigin="*"></script>--}}
{{--<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/5fbZx3NV5xhaMoMLrZV3TkN4/recaptcha__ru.js"></script>--}}
{{--<script src="https://www.google.com/recaptcha/api.js?hl=ru"></script>--}}
{{--<script type="text/javascript">--}}
{{--    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
{{--    (function(){--}}
{{--        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
{{--        s1.async=true;--}}
{{--        s1.src='https://embed.tawk.to/58db6b87f97dd14875f5a9f6/default';--}}
{{--        s1.charset='UTF-8';--}}
{{--        s1.setAttribute('crossorigin','*');--}}
{{--        s0.parentNode.insertBefore(s1,s0);--}}
{{--    })();--}}
{{--</script>--}}
{{--<script>--}}
{{--    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}

{{--    ga('create', 'UA-96571938-1', 'auto');--}}
{{--    ga('send', 'pageview');--}}

{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    (function (d, w, c) {--}}
{{--        (w[c] = w[c] || []).push(function() {--}}
{{--            try {--}}
{{--                w.yaCounter43866994 = new Ya.Metrika({--}}
{{--                    id:43866994,--}}
{{--                    clickmap:true,--}}
{{--                    trackLinks:true,--}}
{{--                    accurateTrackBounce:true,--}}
{{--                    webvisor:true--}}
{{--                });--}}
{{--            } catch(e) { }--}}
{{--        });--}}

{{--        var n = d.getElementsByTagName("script")[0],--}}
{{--            s = d.createElement("script"),--}}
{{--            f = function () { n.parentNode.insertBefore(s, n); };--}}
{{--        s.type = "text/javascript";--}}
{{--        s.async = true;--}}
{{--        s.src = "https://mc.yandex.ru/metrika/watch.js";--}}

{{--        if (w.opera == "[object Opera]") {--}}
{{--            d.addEventListener("DOMContentLoaded", f, false);--}}
{{--        } else { f(); }--}}
{{--    })(document, window, "yandex_metrika_callbacks");--}}
{{--</script>--}}
{{--<noscript><div><img src="https://mc.yandex.ru/watch/43866994" style="position:absolute; left:-9999px;" alt="" /></div></noscript>--}}
</body>
</html>
