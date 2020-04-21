@extends("theme.formularios.layout")
@section('titulo')
Lista convocatorias
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Convocatorias</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_convocatoria')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        Nuevo Registro
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table id="table_noticia" class="table table-bordered table-striped"">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th style="width: 20%">Oferente</th>
                            <th>Vigencia</th>
                            <th>Estado</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($convocatorias as $data)
                        <tr>
                            <td>{{$data->nombreConvocatoria}}</td>
                            <td>{{$data->oferenteConvocatoria}}</td>
                            <td>{{$data->vigenciaConvocatoria}}</td>
                            <td>{{$data->estadoConvocatoria}}</td>
                            <td>
                                <a href="{{route('editar_convocatoria' , [$data->idConvocatoria])}}" class="btn-accion-tabla tooltipsC"
                                    title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                                <form action="{{route('eliminar_convocatoria',[$data->idConvocatoria])}}"
                                    class="d-inline form-eliminar" method="POST">
                                    @csrf @method('delete')
                                    <button type="submit" class="btn-accion-tabla destroy tooltipsC"
                                        title="Elimiar este Registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
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