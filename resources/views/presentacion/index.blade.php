@extends("theme.$theme.layout")
@section('titulo')
Presentacion
@endsection

@section('content')

@section('titulo1')
Presentación
@endsection

<div class="wrapper">
    <!-- Inicio Header -->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header -->
</div>


<!-- Inicio content-->
<div class="container content profile">
    <div class="row">
        <div class="col-md-4">
            @include("theme.$theme.menuvertical")
        </div>
    
        <div class="col-md-8 mb-margin-bottom-30">
            <div class="margin-bottom-40">
                <div class="headline margin-bottom-30">
                    <h1>Presentación</h1>
                </div>
                <div class="shadow-wrapper">
                    <blockquote class="tag-box tag-box-v4 margin-bottom-40">
                        <h5>
                            <p><img alt="" src="{{$item->fotoDirector}}"
                                    style="height:323px; width:250px;" />
                            </p>
                            <p>&nbsp;</p>      
                            <p><strong>Director:</strong>{{$item->director}}<br />
                               <strong>Correo:</strong>{{$item->correo}}<br />                                
                            </p>
                        </h5>
                    </blockquote>
                </div>
                <h5>
                    <p>
                        {{$item->textoPresentacion}}
                    </p>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <!-- Inicio footer Noticia-->
        @include("noticia/ultimasnoticias")
        <!-- Fin footer Noticias-->
    </div>
</div>
@endsection
