@extends("theme.formularios.layout")
@section('titulo')
Mision y Vision
@endsection

@section('scripts')
<!-- CK Editor -->
<script src="{{asset("assets/lte/bower_components/ckeditor/ckeditor.js")}}"></script>
<script>
    CKEDITOR.replace( "editor1" );
    CKEDITOR.replace( "editor2" );
</script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        @include('formularios.includes.form_error')
        @include('formularios.includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"> Editar Mision y Vision </h3>
                <div class="box-tools with-border">
                    <a href="{{route('mision_vision')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>
                        Volver
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_mision_vision')}}" id="form-general" class="form-horizontal" method="POST"
                autocomplete="off" enctype="multipart/form-data">
                @csrf @method('put')
                <div class="box.body">
                    <div class="form-group">
                        <label for="mision" class="col-lg-3 control-label requerido">Misión</label>
                    
                        <div class="col-lg-8">
                            <textarea name="mision" id="editor1" rows="15" cols="80"
                                required>{{old('mision', $data->mision ?? '')}}</textarea>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="Vision" class="col-lg-3 control-label requerido">Visión</label>
                    
                        <div class="col-lg-8">
                            <textarea name="vision" id="editor2" rows="15" cols="80"
                                required>{{old('vision', $data->vision ?? '')}}</textarea>
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