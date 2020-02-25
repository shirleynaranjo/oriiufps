<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->

    <head>
        <title>@yield('titulo', 'ORII') | ORII-UFPS </title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link href="{{asset("assets/$theme/img/favicon.ico")}}" rel="Shortcut icon">
        <!-- Web Fonts -->
        <link rel='stylesheet' type='text/css'
            href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/bootstrap.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/ie8.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/blocks.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/plugins.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/style.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/app.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/shop.plugins.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/shop.blocks.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/style-switcher.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/shop.style.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/header-v6.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/header-v8.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/header.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/footer-v1.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/animate.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/line-icons.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/font-awesome.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/owl.carousel.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/horizontal-parallax.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/layerslider.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/ured.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/jquery.mCustomScrollbar.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/sky-forms.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/custom-sky-forms.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/profile.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/brand-buttons.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/brand-buttons-inversed.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/hover.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/custom-hover-effects.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/custom.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/$theme/css/pgwslider.min.css")}}">
        <section class="style">
            @yield('style')
        </section>
    </head>

    <body class="header-fixed boxed-layout" style="position: relative; min-height: 100%; top: 0px;">
        <div class="wrapper">
            <!-- Incio header -->
            @include("theme/$theme/header")
            <!-- Fin header -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section>
                    @yield('content')
                </section>
            </div>

            <!-- Incio footer -->
            @include("theme/$theme/footer")
            <!-- Fin footer -->
        </div>

        <!--Scripts-->
        <script type="text/javascript" src="{{asset("assets/$theme/js/jquery.min.js")}}"></script>       
        <script type="text/javascript" src="{{asset("assets/$theme/js/jquery-migrate.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/bootstrap.min.js")}}"></script>               
        <script type="text/javascript" src="{{asset("assets/$theme/js/smoothScroll.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/owl.carousel.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/sequence.jquery-min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/greensock.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/layerslider.transitions.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/layerslider.kreaturamedia.jquery.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/custom.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/pgwslider.min.js")}}"></script> 
        <script type="text/javascript" src="{{asset("assets/$theme/js/app.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/owl-carousel.min.js")}}"></script>       
        <script type="text/javascript" src="{{asset("assets/$theme/js/validation.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/owl-recent-works.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/$theme/js/wow.min.js")}}"></script>
        <section>
            @yield('scripts')
        </section>
        <!--[if lt IE 9]>
        <script src="assets/plugins/respond.js"></script>
        <script src="assets/plugins/html5shiv.js"></script>
        <script src="assets/plugins/placeholder-IE-fixes.js"></script>
        <![endif]-->

        {{-- <script>
            (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-88760502-1', 'auto');
        ga('send', 'pageview');
        </script> --}}

    </body>

</html>