@extends("theme.formularios.layout")
@section('titulo')
Convocatorias
@endsection

@section('style')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{asset("assets/lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
@endsection

@section('scripts')
<!-- bootstrap datepicker -->
<script src="{{asset("assets/lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
<script src="{{asset("assets/lte/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js")}}"></script>
<script>
    $(document).ready(function() {
        $('#datepicker').datepicker({
            autoclose: true,
            language: 'es', 
        })
    })
</script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.form_error')
        @include('formularios.includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"> Editar Convocatoria </h3>
                <div class="box-tools with-border">
                    <a href="{{route('convocatoria')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>
                        Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_convocatoria',['id' => $data->idConvocatoria])}}" id="form-general" class="form-horizontal" method="POST"
                autocomplete="off" enctype="multipart/form-data">
                @csrf @method('put')
                <div class="box.body">
                    <div class="form-group">
                        <label for="nombreConvocatoria" class="col-lg-3 control-label requerido">Nombre Convocatoria</label>
                    
                        <div class="col-lg-8">
                            <input type="text" name="nombreConvocatoria" id="nombreConvocatoria" class="form-control"
                                    value="{{old('nombreConvocatoria', $data->nombreConvocatoria ?? '')}}" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="oferenteConvocatoria" class="col-lg-3 control-label requerido">Oferente</label>
                    
                        <div class="col-lg-8">
                            <input type="text" name="oferenteConvocatoria" id="oferenteConvocatoria" class="form-control"
                                    value="{{old('oferenteConvocatoria', $data->oferenteConvocatoria ?? '')}}" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="vigenciaConvocatoria" class="col-lg-3 control-label requerido">Vigencia</label>
                    
                        <div class="col-lg-8">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>                                
                                    <input type="text" name="vigenciaConvocatoria" id="datepicker" class="form-control pull-right"
                                    value="{{old('vigenciaConvocatoria', $data->vigenciaConvocatoria ?? '')}}" required>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="form-group">
                        <label for="informacionConvocatoria" class="col-lg-3 control-label">Información</label>
                    
                        <div class="col-lg-8">
                            <input type="file" accept="application/pdf" name="infoConvocatoria" id="archivoPDF">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="estadoConvocatoria" class="col-lg-3 control-label requerido">Estado</label>
                    
                        <div class="col-lg-8">
                            <select name="estadoConvocatoria" id="estadoConvocatoria" class="form-control" required>
                                <option value="" hidden> Seleccionar </option>
                                <option value="1" {{old('estadoConvocatoria',$data->estadoConvocatoria) == 1 ? 'selected' : ''}}>Abierta</option>
                                <option value="0" {{old('estadoConvocatoria',$data->estadoConvocatoria) == 0 ? 'selected' : ''}}>Cerrada</option>
                            </select>
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