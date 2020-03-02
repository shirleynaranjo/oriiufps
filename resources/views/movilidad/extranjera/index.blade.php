@extends("theme.$theme.layout")

@section('titulo')
Movilidad
@endsection

@section('content')

@section('titulo1')
Movilidad Comunidad Extranjera
@endsection

<div class="wrapper">
    <!-- Inicio Header Evento-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Evento-->
</div>

<!-- Inicio content-->
<div class="container content profile">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
    {{-- <div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("noticia/footerultimasnoticia")
        <!-- Fin Header Noticias-->
    </div> --}}
</div>
@endsection
