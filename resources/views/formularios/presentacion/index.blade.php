@extends("theme.formularios.layout")
@section('titulo')
Presentación
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Presentación</h3>
                <div class="box-tools pull-right">                  
                </div>
            </div>
            <div class="box-body">
                <table id="table_noticia" class="table table-bordered table-striped"">
                    <thead>
                        <tr>
                            <th style="width: 10%">Foto director</th>
                            <th style="width: 20%">Director</th>
                            <th>Correo</th>
                            <th>Texto de presentación</th>                            
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($presentacion as $data)
                        <tr>
                            <td><img class="img-responsive"
                                src="{{Storage::url("imagenes/presentacion/director/$data->fotoDirector")}}" alt=""></td>
                            <td>{{$data->director}}</td>
                            <td>{{$data->correo}}</td>
                            <td>{!!$data->textoPresentacion!!}</td>
                            <td>
                                <a href="{{route('editar_presentacion')}}" class="btn-accion-tabla tooltipsC"
                                    title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
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