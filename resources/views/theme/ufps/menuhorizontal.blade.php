<div class="menu-responsive">
    <!-- Logo -->
    <a class="logo logo-responsive" href="index.html">
        <img src="{{asset("assets/$theme/img/horizontal_logo_pequeno.png")}}" alt="Logo">
    </a><!-- End Logo -->

    <!-- Toggle get grouped for better mobile display -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="fa fa-bars"></span>
    </button><!-- End Toggle -->
</div>

<!-- Navbar -->
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
    <div class="container">
        <ul class="nav navbar-nav">
            <!-- Home -->
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    ORII
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a href="javascript:void(0);">Quienes Somos</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url("")}}"><i class="fa fa-sitemap" aria-hidden="true"></i>Presentacion</a></li>                            
                        </ul>
                    </li>                    
                </ul>
            </li>

            <li class="dropdown">
                <a href="{{url("")}}">
                    Convenios
                </a>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    Movilidad
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{url("")}}">Movilidad Estudiantes</a></li>
                    <li><a href="{{url("")}}">Movilidad Docentes</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="{{url("")}}">
                    Comunidad extranjera
                </a>
            </li>

            <li class="dropdown">
                <a href="{{url("")}}">
                    Convocatorias
                </a>
            </li>
            <li class="dropdown">
                <a href="{{url("")}}">
                    Experiencias
                </a>
            </li>
            <li class="dropdown">
                <a href="{{url("")}}">
                    SISTEMA ORII
                </a>
            </li>
        </ul>
    </div>
</div>
<!--/navbar-collapse-->