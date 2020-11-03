@extends("theme.formularios.layout")
@section('titulo')
Mision y Vision
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Mision y Vision</h3>
                <div class="box-tools pull-right">                  
                </div>
            </div>
            <div class="box-body">
                <table id="table_noticia" class="table table-bordered table-striped"">
                    <thead>
                        <tr>                            
                            <th style="width: 50%">Mision</th>
                            <th>Vision</th>                            
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($presentacion as $data)
                        <tr>
                            <td>{!!$data->mision!!}</td>
                            <td>{!!$data->vision!!}</td>
                            <td>
                                <a href="{{route('editar_mision_vision')}}" class="btn-accion-tabla tooltipsC"
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