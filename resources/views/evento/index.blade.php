@extends("theme.$theme.layout")
@section('titulo')
Eventos
@endsection

@section('content')

@section('titulo1')
Eventos
@endsection

@section('style')
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables/css/dataTables.bootstrap.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/$theme/style/datatables.css")}}">
@endsection

@section('scripts')
<script src="{{asset("assets/$theme/plugins/datatables/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables/js/dataTables.bootstrap.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables/js/main.min.js")}}"></script>
@endsection

<div class="wrapper">
    <!-- Inicio Header Eventos-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Eventos-->
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
                        @foreach ($eventos as $evento)
                        <tr>
                            <td><img class="img-responsive" src="{{$evento->imagenMiniatura}}" alt="">
                            </td>
                            <td>
                                <h3>
                                    <b>{{$evento->fechaEvento}}</b>
                                </h3>
                            </td>
                            <td>
                                <h3><b>
                                        <a href="{{route('show.evento', ['idEvento'=> $evento->idEvento])}}">
                                            {{$evento->tituloEvento}}
                                        </a>
                                    </b></h3>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("noticia/ultimasnoticias")
        <!-- Fin Header Noticias-->
    </div>
</div>
@endsection
