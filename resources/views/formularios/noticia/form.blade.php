<label class="col-lg-12 coment">Carátula de la noticia en la página de inicio </label>

<div class="form-group">
    @if (isset($data->imagenInicio))
        <label for="imagenInicio" class="col-lg-3 control-label">Imagen portada</label>

        <div class="col-lg-5">
            <input type="file" name="imagenPortada" id="imagenInicio" accept="image/*">
        </div>
    @else
        <label for="imagenInicio" class="col-lg-3 control-label requerido">Imagen portada</label>

        <div class="col-lg-5">
            <input type="file" name="imagenPortada" id="imagenInicio" accept="image/*" required>
        </div>
    @endif
</div>

<hr class="col-lg-9 col-md-8">

<div class="form-group">
    <label for="tituloNoticia" class="col-lg-3 control-label requerido">Titulo</label>

    <div class="col-lg-8">
        <input type="text" name="tituloNoticia" id="tituloNoticia" class="form-control"
                value="{{old('tituloNoticia', $data->tituloNoticia ?? '')}}" required>
    </div>
</div>

<div class="form-group">
    <label for="fechaPublicacion" class="col-lg-3 control-label requerido">Fecha Publicación</label>

    <div class="col-lg-8">
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            @if(isset($data->fechaPublicacion))
                <input type="text" name="fechaPublicacion" id="datepicker" class="form-control pull-right"
                value="{{old('fechaPublicacion', $data->fechaPublicacion->isoFormat('MM/DD/YYYY') ?? '')}}" required>
            @else
            <input type="text" name="fechaPublicacion" id="datepicker" class="form-control pull-right"
                value="{{old('fechaPublicacion')}}" required>
            @endif
        </div>
    </div>
</div>

<div class="form-group">
    <label for="descripcionNoticia" class="col-lg-3 control-label requerido">Descripción</label>

    <div class="col-lg-8">
        <textarea name="descripcionNoticia" id="editor1" rows="10" cols="80"
            required>{{old('descripcionNoticia', $data->descripcionNoticia ?? '')}}</textarea>
    </div>
</div>

<label class="col-lg-12 coment">Agregar información adicional imagen o video (YouTube) </label>

<div class="form-group">
    <label for="imagen" class="col-lg-3 control-label">Imagen</label>

    <div class="col-lg-8">
        <input type="file" name="imagenNoti" id="imagen" accept="image/*">
    </div>
</div>

<div class="form-group">
    <label for="video" class="col-lg-3 control-label">Video</label>

    <div class="col-lg-8">
        <input type="text" name="video" id="video" class="form-control" value="{{old('video', $data->video ?? '')}}"
            placeholder="URL ...">
    </div>
</div>