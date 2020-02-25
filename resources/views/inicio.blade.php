@extends("theme.$theme.layout")
@section('titulo')
INICIO
@endsection

@section('style')
<link rel="stylesheet" href="{{asset("assets/$theme/style/carousel.css")}}">
@endsection

<!-- Contenido-->
@section('content')

<div class="wrapper">
    @include("inicio/slidernoticias")

    @include("inicio/eventos")
</div>

@endsection

@section('scripts')
<script src="{{asset("assets/$theme/scripts/carousel.js")}}"></script>
<script>$(document).ready(function() {
    $('.pgwSlider').pgwSlider();
});
</script>
@endsection