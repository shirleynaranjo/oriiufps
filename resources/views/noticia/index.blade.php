@extends("theme.$theme.layout")
@section('titulo')
Noticias
@endsection

@section('content')

@section('titulo1')
Noticias
@endsection

@section('style')
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables/css/dataTables.bootstrap.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/$theme/style/datatables.css")}}">
<link rel="stylesheet" href="{{asset("assets/$theme/style/noticia.css")}}"
@endsection

@section('scripts')
<script src="{{asset("assets/$theme/plugins/datatables/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables/js/dataTables.bootstrap.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables/js/main.min.js")}}"></script>
@endsection

<div class="wrapper">
    <!-- Inicio Header Noticia-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Noticia-->
</div>

<!-- Inicio content-->
<div class="container content profile">
    <div class="row">
        <div class="col-md-12">
            <div class="box-body table-responsive no-padding">
                <table id="table_noticia" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 20%">Imagen</th>
                            <th style="width: 10%">Fecha</th>
                            <th>Titulo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($noticias as $noticia)
                        <tr>
                            <td><img id="imagen-list" class="img-responsive"
                                src="{{$noticia->imagen}}"
                                alt="">
                            </td>
                            <td><i style="text-transform: none;color: #AA1916;">{{$noticia->fechaPublicacion->isoFormat('MM/DD/YYYY')}}</i></td>
                            <td>
                                <h3><b>
                                    <a href="/noticia/show/{{$noticia->idNoticia}}">
                                        {{$noticia->tituloNoticia}}
                                    </a>
                                </b>  
                                </h3>
                            </td>                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
