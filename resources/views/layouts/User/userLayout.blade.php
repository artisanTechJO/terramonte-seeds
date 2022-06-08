<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Terramonte Seeds</title>
    <meta name="title" content="Terramonte Seeds">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://terramonteseeds.com/">
    <meta property="og:title" content="Terramonte Seeds">
    <meta property="og:description" content="Terra monte co. focus on advanced hybrid vegetable seeds, looking for the added value of farmers in choosing advance sophisticated  and divers varieties ,providing guidance , permenant support  for their long term prosperity .">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://terramonteseeds.com/">
    <meta property="twitter:title" content="Terramonte Seeds">
    <meta property="twitter:description" content="Terra monte co. focus on advanced hybrid vegetable seeds, looking for the added value of farmers in choosing advance sophisticated  and divers varieties ,providing guidance , permenant support  for their long term prosperity .">
    <meta property="twitter:image" content="">

    <meta charset="UTF-8">
    <meta content='worldwide' name='coverage' />
    <meta content='en' http-equiv='content-language' />
    <meta content='luxembourg' name='geo.country' />
    <meta content='en_En' property='og:locale' />
    <meta content='en_En' property='og:locale:alternate' />
    <meta content='luxembourg' name='geo.placename' />
    <meta content='Global' name='distribution' />
    <meta content='all' name='audience' />
    <meta content='all' name='robots' />
    <meta content='index,follow' name='robots' />
    <meta content='General' name='rating' />
    <meta content='5 days' name='revisit' />
    <meta content='5 days' name='revisit-after' />
    <meta content='document' name='resource-type' />
    <meta content='IE=edge' http-equiv='X-UA-Compatible' />
    <meta content='Terramonte Seeds' name='Author' />
    <meta content='general' name='rating' />
    <meta content='blogger' name='generator' />
    <meta name="description" content="Terramonte monte focus on advanced hybrid vegetable seeds, looking for the added value of farmers in choosing advance seeds">

    <meta name="keywords" content="Seeds, Plants, Vegetable, Seeds,Company,Terramonte,Terra monte,Terramonte Seeds"/>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CL1L1YRSQ2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CL1L1YRSQ2');
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/User/assets/images/TmLogo2.png" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{asset('User/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('User/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('User/assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('User/assets/css/custom-select.css')}}">
    <link rel="stylesheet" href="{{asset('User/assets/css/style.css?v=4')}}">
    <link rel="stylesheet" href="{{asset('User/assets/css/custom.css')}}">
    <style>
        .tm-cover
        {
            background: #fff;
            width: 100%;
            background-image: url("{{asset('User/assets/images/0104.png')}}");
            height: 58px;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .tox :not(svg):not(rect),.tox
        {
            display: none !important;
        }
        @media only screen and (max-width: 700px) {
            .header-top
            {
                display: block !important;
            }
            .footer-widget{
                margin-top:12px;
            }
            .footer-widget .footer-title{
                margin-bottom: 5px;
            }
        }

        .player .vp-title{
            display: none !important;
        }
    </style>
    @yield('head')
</head>

<body id="top-page" class="sticky-sidebar-home">
<h1>Terramonte Seeds</h1>
        <!-- header section start -->
        @include('layouts.User.header')
        <!-- header section end -->
        <div class="page-layout home-layout">
            @include('layouts.User.sideMenu')
            @yield('content')
        </div>
        <!-- footer section -->
        @include('layouts.User.footer')
        <!-- footer section -->

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src='{{asset('User/assets/js/jquery.min.js')}}'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js"></script>
        <script src='{{asset('User/assets/js/bootstrap.bundle.min.js')}}'></script>
        <script src='{{asset('User/assets/js/swiper.min.js')}}'></script>
        <script src="{{asset('User/assets/js/slick.js')}}"></script>
        <script src='{{asset('User/assets/js/jquery-easeing.min.js')}}'></script>
        <script src='{{asset('User/assets/js/scroll-nav.js')}}'></script>
        <script src='{{asset('User/assets/js/custom-select.js')}}'></script>
        <script src='{{asset('User/assets/js/fly-cart.js')}}'></script>
        <script src='{{asset('User/assets/js/multi-countdown.js')}}'></script>
        <script src='{{asset('User/assets/js/theia-sticky-sidebar.js')}}'></script>
        <script src='{{asset('User/assets/js/functions.js')}}'></script>
        <script src='{{asset('User/assets/js/custom.js')}}'></script>
@yield('scripts')

</body>

</html>
