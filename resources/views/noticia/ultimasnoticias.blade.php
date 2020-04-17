
<hr class="devider devider-dotted">
<div class="row margin-top-60">
    <h4 style="color:#aa1916;">Últimas Noticias</h4>

    @foreach ($noticias as $noticia)
           
    <div class="col-md-4">
        <div class="blog-thumb blog-thumb-circle margin-bottom-15">
            <div class="blog-thumb-hover">
                <img id="imagen" class="img-responsive"
                    src="{{isset($noticia->imagen) ? Storage::url("imagenes/noticias/$noticia->imagen") : "http://www.placehold.it/80x56/EFEFEF/AAAAAA&text=UFPS"}}" alt="">
                <a class="hover-grad" href="/noticia/show/{{$noticia->slug}}">
                    <i class="fa fa-link"></i>
                </a>
            </div>
            <div class="blog-thumb-desc">
                <h3>
                    <a href="/noticia/show/{{$noticia->slug}}">{{$noticia->tituloNoticia}}</a>
                </h3>
                <ul class="blog-thumb-info">
                    <li><i class="fa fa-calendar"></i> {{$noticia->fechaPublicacion->isoFormat('dddd, DD [de] MMMM [del] YYYY')}}</li>
                </ul>
            </div>
        </div>
    </div>

    @endforeach

</div>