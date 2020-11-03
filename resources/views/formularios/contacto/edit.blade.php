@extends("theme.formularios.layout")
@section('titulo')
Contacto
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
                <h3 class="box-title"> Editar Contacto </h3>
                <div class="box-tools with-border">
                    <a href="{{route('contacto')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>
                        Volver
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_contacto')}}" id="form-general" class="form-horizontal" method="POST"
                autocomplete="off" enctype="multipart/form-data">
                @csrf @method('put')
                <div class="box.body">
                    <div class="form-group">                   
                    
                    <div class="form-group">
                        <label for="contacto" class="col-lg-3 control-label requerido">Descripción contacto</label>
                    
                        <div class="col-lg-8">
                            <textarea name="contacto" id="editor1" rows="15" cols="80"
                            required>{{old('contacto', $data->contacto ?? '')}}</textarea>
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