<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kaddish</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <script src="https://www.paypal.com/sdk/js?client-id=AamvJHqtBfrIM4oNPDknTMJmyC5kN-btQRU5baqABM-YEFktx28e_DDpB4nmXQeHUBJnJufE4hYjVxnB">
    </script>
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
<footer class="page-footer font-small unique-color-dark fixed-bottom">
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
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- MDB core JavaScript -->
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>--}}
<script src = " https://unpkg.com/vue " ></script>
<script src = " https://unpkg.com/vue-paypal-checkout@2.0.0/dist/vue-paypal-checkout.min.js "></script>

</body>
</html>
