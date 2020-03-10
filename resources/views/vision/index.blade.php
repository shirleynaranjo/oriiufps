@extends("theme.$theme.layout")
@section('titulo')
Visión
@endsection

@section('content')

@section('titulo1')
Oficina de Relaciones Interinstitucionales e Internacionales
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
                    <h1>Vision</h1>
                </div>
                <div class="shadow-wrapper">
                    <blockquote class="tag-box tag-box-v4 margin-bottom-40">
                        <h5>
                            <p>
                                {{$item->vision}}
                            </p>
                        </h5>
                    </blockquote>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection