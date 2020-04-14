@extends("theme.formularios.layout")
@section('titulo')
Noticias
@endsection

@section('style')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{asset("assets/lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
@endsection

@section('scripts')
<!-- CK Editor -->
<script src="{{asset("assets/lte/bower_components/ckeditor/ckeditor.js")}}"></script>
<script>
    CKEDITOR.replace( "editor1" );
</script>
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
                <h3 class="box-title"> Editar Evento </h3>
                <div class="box-tools with-border">
                    <a href="{{route('noticia')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>
                        Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_noticia',['slug' => $data->slug])}}" id="form-general" class="form-horizontal" method="POST"
                autocomplete="off" enctype="multipart/form-data">
                @csrf @method('put')
                <div class="box.body">
                   @include('formularios.noticia.form')
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