@extends("theme.formularios.layout")
@section('titulo')
Eventos
@endsection

@section('scripts')
<!-- CK Editor -->
<script src="{{asset("assets/lte/bower_components/ckeditor/ckeditor.js")}}"></script>
<script>
    CKEDITOR.replace( "editor1" );
</script>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.form_error')
        @include('formularios.includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"> Editar Eventos </h3>
                <div class="box-tools with-border">
                    <a href="{{route('evento')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>
                        Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_evento',['id' => $data->idEvento])}}" id="form-general"
                class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf @method('put')
                <div class="box.body">

                    <label class="col-lg-12 coment">Carátula del evento en la página de inicio </label>

                    <div class="form-group">
                        <label for="imagen" class="col-lg-3 control-label">Imagen portada</label>

                        <div class="col-lg-5">
                            <input type="file" name="imagenMin" id="imagenMiniatura" data-initial-preview="{{isset($data->imagen) ? $data->imagen : ""}}" accept="image/*" >
                        </div>
                    </div>

                    <hr class="col-lg-9 col-md-8">

                    <div class="form-group">
                        <label for="tituloEvento" class="col-lg-3 control-label requerido">Titulo</label>

                        <div class="col-lg-8">
                            <input type="text" name="tituloEvento" id="tituloEvento" class="form-control"
                                value="{{old('tituloEvento',$data->tituloEvento ?? '')}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lugarEvento" class="col-lg-3 control-label requerido">Lugar</label>

                        <div class="col-lg-8">
                            <input type="text" name="lugarEvento" id="lugarEvento" class="form-control"
                                value="{{old('lugarEvento',$data->lugarEvento ?? '')}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fechaEvento" class="col-lg-3 control-label requerido">Fecha</label>

                        <div class="col-lg-8">
                            <input type="text" name="fechaEvento" id="fechaEvento" class="form-control"
                                value="{{old('fechaEvento',$data->fechaEvento ?? '')}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="horaEvento" class="col-lg-3 control-label requerido">Hora</label>

                        <div class="col-lg-8">
                            <input type="text" name="horaEvento" id="horaEvento" class="form-control"
                                value="{{old('horaEvento',$data->horaEvento ?? '')}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descripcionEvento" class="col-lg-3 control-label">Descripción</label>

                        <div class="col-lg-8">
                            <textarea id="editor1" name="descripcionEvento" rows="10"
                                cols="80">{{old('descripcionEvento',$data->descripcionEvento ?? '')}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="estadoEvento" class="col-lg-3 control-label requerido">Estado</label>

                        <div class="col-lg-8">
                            <select name="estadoEvento" id="estadoEvento" class="form-control" required>
                                <option value="" hidden> Seleccionar </option>
                                <option value="1" {{old('estadoEvento',$data->estadoEvento) == 1 ? 'selected' : ''}}>En
                                    curso</option>
                                <option value="0" {{old('estadoEvento',$data->estadoEvento) == 0 ? 'selected' : ''}}>
                                    Terminado</option>
                            </select>
                        </div>
                    </div>

                    <label class="col-lg-12 coment">Agregar información adicional en PDF o imagen (Opcional) </label>

                    <div class="form-group">
                        <label for="imagen" class="col-lg-3 control-label">Imagen</label>

                        <div class="col-lg-8">
                            <input type="file" accept="image/*" name="imagenEv" id="imagen">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="archivoPDF" class="col-lg-3 control-label">PDF</label>

                        <div class="col-lg-8">
                            <input type="file" accept="application/pdf" name="archivo" id="archivoPDF">
                        </div>
                    </div>      
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col lg-6">
                        @include('formularios.includes.button_form_editar')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection