@extends("theme.formularios.layout")
@section('titulo')
Presentación
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
                <h3 class="box-title"> Editar Presentaión </h3>
                <div class="box-tools with-border">
                    <a href="{{route('presentacion')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>
                        Volver
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_presentacion')}}" id="form-general" class="form-horizontal" method="POST"
                autocomplete="off" enctype="multipart/form-data">
                @csrf @method('put')
                <div class="box.body">
                    <div class="form-group">
                        @if (isset($data->fotoDirector))
                            <label for="fotoDirector" class="col-lg-3 control-label">Foto Director</label>
                    
                            <div class="col-lg-5">
                                <input type="file" name="imagen" id="fotoDirector" accept="image/*">
                            </div>
                        @else
                            <label for="fotoDirector" class="col-lg-3 control-label requerido">Foto Director</label>
                    
                            <div class="col-lg-5">
                                <input type="file" name="imagen" id="fotoDirector" accept="image/*" required>
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label for="director" class="col-lg-3 control-label requerido">Director</label>
                    
                        <div class="col-lg-8">
                            <input type="text" name="director" id="director" class="form-control"
                                    value="{{old('director', $data->director ?? '')}}" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="correo" class="col-lg-3 control-label requerido">Correo</label>
                    
                        <div class="col-lg-8">
                            <input type="text" name="correo" id="correo" class="form-control"
                                    value="{{old('correo', $data->correo ?? '')}}" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="textoPresentacion" class="col-lg-3 control-label requerido">Texto presentación</label>
                    
                        <div class="col-lg-8">
                            <textarea name="textoPresentacion" id="editor1" rows="10" cols="80"
                                required>{{old('textoPresentacion', $data->textoPresentacion ?? '')}}</textarea>
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