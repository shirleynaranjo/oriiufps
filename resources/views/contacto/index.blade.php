@extends("theme.$theme.layout")
@section('titulo')
Contacto
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
                    <h1>Contacto</h1>
                </div>
                <div class="shadow-wrapper">
                    <blockquote class="tag-box tag-box-v4 margin-bottom-40">
                        <h5> 
                            <p><strong>Director:</strong> Nelson<br />
                            


                                {{-- <p><strong>Director:</strong>{{$item->director}}<br />
                                <strong>Correo institucional:</strong>{{$item->correo}}<br />
                                <strong>Tel&eacute;fono:</strong>{{$item->telefono}} <br />
                                <strong>Ubicaci&oacute;n:</strong>{{$item->ubicacion}}<br />
                                <strong>Horario de atenci&oacute;n:</strong> lunes a viernes 8:00 a.m. a 12:00 m. y 2:00 p.m. a
                                6:00 p.m.</p> --}}
                        </h5>
                    </blockquote>
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection