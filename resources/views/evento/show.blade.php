@extends("theme.$theme.layout")

@section('titulo')
Eventos
@endsection

@section('content')

@section('titulo1')
Evento
@endsection

<div class="wrapper">
    <!-- Inicio Header Evento-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Evento-->
</div>

<!-- Inicio content-->
<div class="container content profile">
    <div class="row">
        <div class="col-md-12 col-sm-8 mb-margin-bottom-30">
            <div class="row">
                <div class="col-md-10">
                    <div class="headline">
                        {{-- <h1 style="color:#555;">{{$evento->tituloEvento}}</h1> --}}
                        <h1 style="color:#555;">Evento1</h1>
                    </div>
                </div>

            </div>
            <div class="tag-box tag-box-v6">
                <div class="row">
                    <div class="col-md-12">
                        <dl class="dl-horizontal margin-top-20">
                            <dt><i class="fa fa-institution"></i><span>Lugar:</span></dt>
                            <dd>UFPS</dd>
                            <dt><i class="fa fa-calendar"></i><span>Fecha del evento:</span></dt>
                            <dd>Del 18 octubre al 30 de noviembre </dd>
                            <dt><i class="fa fa-clock-o"></i><span>Hora del evento:</span></dt>
                            <dd>Ver publicación </dd>
                        </dl>

                    </div>

                </div>


            </div>
        </div>

    </div>
    {{-- <div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("noticia/footerultimasnoticia")
        <!-- Fin Header Noticias-->
    </div> --}}
</div>

@endsection