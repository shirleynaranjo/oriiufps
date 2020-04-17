<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Top Navigation</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset("assets/lte/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/lte/bower_components/font-awesome/css/font-awesome.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset("assets/lte/bower_components/Ionicons/css/ionicons.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/lte/dist/css/AdminLTE.min.css")}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset("assets/lte/dist/css/skins/_all-skins.min.css")}}">
        <!-- PROPIOS -->
        <link rel="stylesheet" href="{{asset("assets/formularios/css/custom.css")}}">
        <!--Datatable-->
        <link rel="stylesheet" href="{{asset("assets/lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">      
        
        <!-- Google Font -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <section class="style">
            @yield('style')
        </section>
    </head>

    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                              <li><a href="{{route("evento")}}">Eventos</a></li>
                              <li><a href="{{route("noticia")}}">Noticias</a></li>                              
                              <li><a href="{{route("movilidad")}}">Movilidad</a></li>
                              <li><a href="{{route("convocatoria")}}">Convocatoria</a></li>
                              <li><a href="{{route("presentacion")}}">Presentacion</a></li>
                              <li><a href="{{route("experiencia")}}">Experiencias</a></li>
                              <li><a href="{{route("contacto")}}">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            @yield('titulo')                            
                        </h1>
                    </section>
                    <!-- Main content -->
                    <section class="content">                       
                        @yield('content')                    
                    </section>
                    <!-- /.content -->
                </div>
            </div>
            <footer class="main-footer">
            </footer>
        </div>

        <!-- jQuery 3 -->
        <script src="{{asset("assets/lte/bower_components/jquery/dist/jquery.min.js")}}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset("assets/lte/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <!-- SlimScroll -->
        <script src="{{asset("assets/lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
        <!-- FastClick -->
        <script src="{{asset("assets/lte/bower_components/fastclick/lib/fastclick.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/lte/dist/js/adminlte.min.js")}}"></script>
        <!--PROPIOS -->
        <script src="{{asset("assets/formularios/js/scripts.js")}}"></script>
        <!--Datatable-->
        <script src="{{asset("assets/lte/bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
        <script src="{{asset("assets/lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
        <script src="{{asset("assets/formularios/js/main.min.js")}}"></script>
        @yield('scripts')
        
    </body>

</html>