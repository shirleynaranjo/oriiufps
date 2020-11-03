@extends("theme.formularios.layout")
@section('titulo')
Contacto
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Contacto</h3>
                <div class="box-tools pull-right">                  
                </div>
            </div>
            <div class="box-body">
                <table id="table_noticia" class="table table-bordered table-striped"">
                    <thead>
                        <tr>
                            <th>Descripción contacto</th>                                                        
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($presentacion as $data)
                        <tr>                            
                            <td>{!!$data->contacto!!}</td>                            
                            <td>
                                <a href="{{route('editar_contacto')}}" class="btn-accion-tabla tooltipsC"
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