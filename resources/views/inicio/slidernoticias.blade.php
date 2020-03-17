<div class="row no-margin">
    <div class="col-md-12 no-padding">
        <ul class="pgwSlider">

            @foreach ($noticias as $noticia)                
            
            <li>
                <a href="/noticia/show/{{$noticia->idNoticia}}"><img
                        src="{{$noticia->imagenInicio}}"
                        alt="{{$noticia->tituloNoticia}}"><span
                        style="font-family: inherit; font-weight: bold;">{{$noticia->tituloNoticia}}</span></a>
            </li>
            @endforeach
            
        </ul>
    </div>
</div>