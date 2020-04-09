<div style="background-color: #e8e8e8; ">
    <div class="container content-prin profile">
        <div class="row margin-top-10">
            <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
                <h1 style="font-size: 30px;"><b>Eventos</b></h1>
                <span class="bordered-icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
            </div>
            <div class="col-md-12">
                <div class="row equal-height-columns margin-bottom-10">

                    <div class="container">
                        <div id="carousel" class="owl-carousel owl-work-v1 margin-bottom-40">

                            @foreach ($eventos as $evento)                               
                            
                            <div class="item">
                                <a href="/evento/show/{{$evento->idEvento}}" style="text-align: center;">
                                    <div class="easy-block-v1-badge rgba-red" style="color:#fff; padding: 5px;">
                                        {{$evento->fechaEvento}} </div>
                                    <em class="overflow-hidden">
                                        <img class="img-responsive"
                                    src="{{Storage::url("imagenes/eventos/miniaturas/$evento->imagenMiniatura")}}"
                                            alt="Imagen de eventos">
                                    </em>
                                    <span>
                                        <strong>{{$evento->tituloEvento}}</strong>
                                        <i>Lugar: {{$evento->lugarEvento}}</i>
                                    </span>
                                </a>
                            </div> 
                            
                            @endforeach

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>