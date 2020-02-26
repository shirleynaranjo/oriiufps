@extends("theme.$theme.layout")
@section('titulo')
Convenios
@endsection

@section('content')    

@section('titulo1')
Mapa de Convenios
@endsection

@section('style')
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/mapael/css/mapael.css")}}">
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
    <script src="{{asset("assets/$theme/plugins/mapael/js/jquery.mapael.js")}}"></script>  
    <script src="{{asset("assets/$theme/plugins/mapael/js/world_countries.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/mapael/js/mapael.js")}}"></script>
@endsection

<div class="wrapper">
    <!-- Inicio Header Convenio-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Convenio-->
</div>

<!-- Inicio content-->
<div class="container content profile">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="mapcontainer">
				<div class="map">
				</div>
			</div>  
        </div>
    </div>

    <div class="wrapper">
		<div class="row margin-top-60">
			<!-- Inicio footer Noticia-->
			{{-- @include("noticia/footerultimasnoticia") --}}
		</div>
		<!-- Fin footer Noticias-->
	</div>
</div>
@endsection