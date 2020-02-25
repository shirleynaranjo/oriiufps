<header class="main-header">
    <!--=== Header v6 ===-->
    <div id="menu-principal" class="header-v6 header-white-transparent header-sticky" style="position: relative;">
        <div id="barra-superior" class="header-v8">
            <!-- Topbar blog -->
            <div class="blog-topbar">
                <div class="topbar-search-block">
                    <div class="container">
                        <form action="">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <div class="search-close"><i class="icon-close"></i></div>
                        </form>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-7">
                            <div class="topbar-toggler"
                                style="font-size: 10px; color: #eee; letter-spacing: 1px; text-transform: uppercase;">
                                <span class="fa fa-angle-down"></span> PERFILES</div>
                            <ul class="topbar-list topbar-menu">
                                <li><a href="https://ww2.ufps.edu.co/universidad/perfiles/aspirantes/952"
                                        target="_blank"><i class="fa fa-users"></i>Aspirantes</a></li>
                                <li><a href="https://ww2.ufps.edu.co/universidad/perfiles/estudiantes/953"
                                        target="_blank"><i class="fa fa-user"></i>Estudiantes</a></li>
                                <li><a href="https://ww2.ufps.edu.co/universidad/perfiles/egresados/954"
                                        target="_blank"><i class="fa fa-graduation-cap"></i>Graduados</a></li>
                                <li><a href="https://docentes.ufps.edu.co/" target="_blank"><i
                                            class="fa fa-user-circle"></i>Docentes</a></li>
                                <li><a href=""><i class="fa fa-briefcase"></i>Empresarios</a></li>
                                <li class="cd-log_reg hidden-sm hidden-md hidden-lg">
                                    <strong><a class="cd-signup" href="javascript:void(0);">Lenguaje</a></strong>
                                    <ul class="topbar-dropdown">
                                        <li><a href="#">Inglés</a></li>
                                        <li><a href="#">Español</a></li>
                                        <li><a href="#">Frances</a></li>
                                    </ul>
                                </li>
                                <li class="cd-log_reg hidden-sm hidden-md hidden-lg">
                                    <strong>
                                        <a class="cd-signin" href="javascript:void(0);">
                                            <i class="fa fa-reply"></i> Versión Anterior</a>
                                    </strong>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-5 col-xs-5 clearfix">
                            <i class="fa fa-search search-btn pull-right"></i>
                            <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">
                                <li class="cd-log_reg home" style="padding: 0px 12px;">
                                    <div id="google_translate_element"></div>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'es',
                                                includedLanguages: 'en,fr,it',
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                                                autoDisplay: false
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <script type="text/javascript"
                                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                    </script>
                                </li>
                                <li class="cd-log_reg home">
                                    <a href="http://www.ufps.edu.co/ufps/index.php">
                                        <i class="fa fa-reply"></i> Versión Anterior</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/end row-->
                </div>
                <!--/end container-->
            </div><!-- End Topbar blog -->
        </div>

        <div class="header-v8 img-logo-superior" style="background-color: #aa1916;">
            <!--=== Parallax Quote ===-->
            <div class="parallax-quote parallaxBg" style="padding: 30px 30px;">
                <div class="parallax-quote-in" style="padding: 0px;">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-5">
                            <a href="{{route('inicio')}}">
                                <img id="logo-header"
                                    src="{{url("https://ww2.ufps.edu.co/public/imagenes/template/header/logo_ufps.png")}}"
                                    alt="Logo UFPS">
                            </a>
                        </div>
                        <div class="col-md-4 col-ms-3 col-xs-3 pull-right">
                            <a href="">
                                <img class="header-banner" src="{{asset("assets/$theme/img/logo_vertical_ORI_1.png")}}"
                                    alt="ORII">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== End Parallax Quote ===-->
        </div>
        <!--/end header-v8-->
        @include("theme/$theme/menuhorizontal")
    </div>
</header>