@extends("theme.$theme.layout")

@section('titulo')
Eventos
@endsection

@section('content')

@section('titulo1')
Eventos
@endsection

<div class="wrapper">
    <!-- Inicio Header Evento-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Evento-->
</div>

<!-- Inicio content-->
<div class="container content profile">
    <div class="row">
        <div class="col-md-9 mb-margin-bottom-30 shadow-wrapper">
            <div class="row">
                <div class="col-md-10">
                    <div class="headline">
                        <h1 style="color:#555;">{{$evento->tituloEvento}}</h1>                       
                    </div>
                </div>
            </div>
            
            <div class="tag-box tag-box-v6">
                <div class="row">
                   
                    <div class="col-md-12">
                        <dl class="dl-horizontal margin-top-20">
                            <dt><i class="fa fa-institution"></i><span>Lugar:</span></dt>
                            <dd>{{$evento->lugarEvento}}</dd>
                            <dt><i class="fa fa-calendar"></i><span>Fecha del evento:</span></dt>
                            <dd>{{$evento->fechaEvento}}</dd>
                            <dt><i class="fa fa-clock-o"></i><span>Hora del evento:</span></dt>
                            <dd>{{$evento->horaEvento}}</dd>
                        </dl>
                        <p>
                            {{$evento->descripcionEvento}}
                        </p>
                        <img class="img-responsive" src="{{$evento->informacionEvento}}" alt="">
                    </div>
                    
                </div>
            </div>            
        </div>
        <div class="col-md-3">
            <div class="headline-v2 headline-v2-red-inst margin-bottom-20">
                <h4><a href="{{route('index.evento')}}"><i class="fa fa-list-alt"></i><b>Ver más Eventos</b></a> 
                </h4>
            </div>
        </div>      
    </div>    
    <div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("noticia/ultimasnoticias")
        <!-- Fin Header Noticias-->
    </div>
</div>

@endsection