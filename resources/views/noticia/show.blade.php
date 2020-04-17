@extends("theme.$theme.layout")
@section('titulo')
Noticias
@endsection

@section('content')

@section('titulo1')
Noticias
@endsection

<div class="wrapper">
    <!-- Inicio Header Noticia-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Noticia-->
</div>

<!-- Inicio content-->
<div class="container content profile">
    <div class="row">
        <div class="col-md-9 mb-margin-bottom-30 shadow-wrapper">
            <div class="row">
                <div class="col-md-11">
                    <div class="headline">
                        <h1 style="color:#555;">{{$noticia->tituloNoticia}}</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="news-v3 bg-color-white col-md-6 col-sm-12 col-xs-12">
                        @isset($noticia->imagen)
                        <div class="margin-bottom-20"></div>

                        <img class="img-responsive" src="{{Storage::url("imagenes/noticias/$noticia->imagen")}}" alt="">                            
                        @endisset
                        
                        @isset($record)
                        <div class="margin-bottom-20"></div>

                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="{{$noticia->video}}" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        @endisset                  
                    </div>

                    <div class="text-right">
                        <em>
                            <h6 style="color:#aa1916;"><i class="fa fa-calendar"></i>
                                Publicado el día
                                {{$noticia->fechaPublicacion->isoFormat('dddd, DD [de] MMMM [de] YYYY')}}</h6>
                        </em>
                    </div>

                    <div class="text-left">
                        <h5 class="parrafo_noticia">
                            {!!$noticia->descripcionNoticia!!}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h4><b><a href="/noticias">Buscar Noticias Anteriores <i class="fa fa-search search-btn"></i></a></b>
            </h4>
        </div>
    </div>
    <div class="wrapper">
        <!-- Inicio footer Noticia-->
        @include("noticia/ultimasnoticias")
        <!-- Fin footer Noticias-->
    </div>
</div>
@endsection