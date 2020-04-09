@extends("theme.formularios.layout")
@section('titulo')
Lista eventos
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Eventos</h3>
                <div class="box-tools pull-right">
                        <a href="{{route('crear_evento')}}" class="btn btn-block btn-success btn-sm">
                                <i class="fa fa-fw fa-plus-circle"></i>
                                Nuevo Registro
                        </a>
                </div>
            </div>
            <div class="box-body">
               <table class="table table-striped table-bordered table-hover">
                   <thead>
                       <tr>
                           <th>Miniatura</th>
                           <th>Titulo</th>
                           <th>Lugar</th>
                           <th>Fecha</th>
                           <th>Hora</th>
                           <th>Descripción</th>
                           <th>Estado</th>
                           <th class="width70"></th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($eventos as $data)
                           <tr>
                               <td><img class="img-responsive" src="{{Storage::url("imagenes/eventos/miniaturas/$data->imagenMiniatura")}}" alt=""></td>
                               <td>{{$data->tituloEvento}}</td>
                               <td>{{$data->lugarEvento}}</td>
                               <td>{{$data->fechaEvento}}</td>
                               <td>{{$data->horaEvento}}</td>
                               <td>{!!$data->descripcionEvento!!}</td>
                               <td>{{$data->estadoEvento}}</td>
                               <td>
                                  <a href="{{route('editar_evento' , ['id'=>$data->idEvento])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                  </a>
                                <form action="{{route('eliminar_evento',['id'=>$data->idEvento])}}" class="d-inline form-eliminar" method="POST">
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