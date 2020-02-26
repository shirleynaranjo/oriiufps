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
                            <th>Titulo</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <a href="">
                                        Noticia
                                </a>                       
                            </td>
                            <td><i style="text-transform: none; color: #AA1916;">09/09</i></td>
                        </tr>
                       
                        <tr>
                            <td>
                                <a href="">
                                        Noticia
                                </a>                       
                            </td>
                            <td><i style="text-transform: none; color: #AA1916;">09/09</i></td>
                        </tr>

                        {{-- @foreach ($noticias as $noticia)
                   <tr>
                      <td>
                         <h3>
                         <a href="{{route('noticia_completa', ['idNoticia'=> $noticia->idNoticia])}}">
                        {{$noticia->tituloNoticia}}
                        </a>
                        </h3>
                        </td>
                        <td><i style="text-transform: none; color: #AA1916;">{{$noticia->fechaPublicacion}}</i></td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection