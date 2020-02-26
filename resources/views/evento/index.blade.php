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
                            <th>Titulo</th>
                            <th style="width: 20%">Lugar</th>
                            <th style="width: 20%">Fecha</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <a href=""">
                                    Fechas Pruebas EKT - 2020
                                </a>
                            </td>
                            <td>ver info</td>
                            <td>ver info</td>
                        </tr>
                        <tr>
                            <td>
                                <a href=""">
                                    Fechas Pruebas EKT - 2020
                                </a>
                            </td>
                            <td>ver info</td>
                            <td>ver info</td>
                        </tr>
                        <tr>
                            <td>
                                <a href=""">
                                    Fechas Pruebas EKT - 2020
                                </a>
                            </td>
                            <td>ver info</td>
                            <td>ver info</td>
                        </tr>
                        {{-- @foreach ($eventos as $evento)
                        <tr>
                            <td>
                                <a href="{{route('evento_completa', ['idEvento'=> $evento->idEvento])}}">
                                    {{$evento->tituloEvento}}
                                </a>
                            </td>
                            <td>{{$evento->lugarEvento}}</td>
                            <td>{{$evento->fechaEvento}}</td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- <div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("noticia/footerultimasnoticia")
        <!-- Fin Header Noticias-->
    </div> --}}
</div>
@endsection