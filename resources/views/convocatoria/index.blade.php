@extends("theme.$theme.layout")
@section('titulo')
Convocatorias
@endsection

@section('content')

@section('titulo1')
Convocatorias
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
    <!-- Inicio Header Convocatoria-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Convocatoria-->
</div>

<!-- Inicio content-->
<div class="container content profile">
    <div class="row">
        <div class="col-md-12">
            <div class="box-body table-responsive no-padding">
                <table id="table_noticia" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Convocatoria</th>
                            <th>Oferente</th>
                            <th style="width: 20%">Vigencia</th>
                            <th style="width: 20%">Información</th>
                        </tr>
                    </thead>
                    <tbody>                              
                        @foreach ($convocatorias as $convocatoria)
                        <tr>
                            <td>{{$convocatoria->nombreConvocatoria}}</td>
                            <td>{{$convocatoria->oferenteConvocatoria}}</td>                            
                            <td>{{$convocatoria->vigenciaConvocatoria}}</td>
                            <td><a href="{{$convocatoria->informacionConvocatoria}}"><i style="text-transform: none; color: #AA1916;">Más información</i></td>
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