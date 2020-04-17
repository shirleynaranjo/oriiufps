@extends("theme.formularios.layout")
@section('titulo')
Lista noticias
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Noticias</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_noticia')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        Nuevo Registro
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table id="table_noticias" class="table table-bordered table-striped"">
                    <thead>
                        <tr>
                            <th>Portada</th>
                            <th style="width: 20%">Titulo</th>
                            <th>Fecha publicación</th>
                            <th>Descripción</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($noticias as $data)
                        <tr>
                            <td><img class="img-responsive"
                                    src="{{Storage::url("imagenes/noticias/$data->imagenInicio")}}" alt=""></td>
                            <td>{{$data->tituloNoticia}}</td>
                            <td>{{$data->fechaPublicacion->isoFormat('DD/MM/YYYY')}}</td>
                            <td>{!!$data->descripcionNoticia!!}</td>
                            <td>
                                <a href="{{route('editar_noticia' , [$data->slug])}}" class="btn-accion-tabla tooltipsC"
                                    title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                                <form action="{{route('eliminar_noticia',[$data->slug])}}"
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