@extends("theme.$theme.layout")
@section('titulo')
Experiencias
@endsection

@section('content')

@section('titulo1')
Experiencias
@endsection

<div class="wrapper">
    <!-- Inicio Header Experiencia-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Experiencia-->
</div>

<!-- Inicio content-->
<div class="container content profile">
    <div class="row">
        <div class="col-md-12">
            <div class="headline">
                <h1 style="color:#555; text-align: center;">​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​Los estudiantes
                    de la UFPS que han hecho
                    intercambios comparten sus experiencias por medio de estos
                    videos, donde nos cuentan todo acerca de los lugares que
                    visitaron
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach ($exps as $exp)
            <div class="col-md-4">
                <div class="thumbnail">
                    <h3 style="text-align: center; color:#aa1916;">{{$exp->descripcionExperiencia}}
                    </h3>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="{{$exp->enlace}}" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="wrapper">
        <!-- Inicio footer Noticia-->
        @include("noticia/ultimasnoticias")
        <!-- Fin footer Noticias-->
    </div>
</div>
@endsection
