<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionConvocatoria;
use App\Http\Requests\ValidacionEvento;
use App\Http\Requests\ValidacionMision_vision;
use App\Http\Requests\ValidacionNoticia;
use App\Http\Requests\ValidacionPresentacion;
use App\Http\Requests\ValidacionContacto;
use App\Models\Convocatoria;
use App\Models\Evento;
use App\Models\Movilidad;
use App\Models\Noticia;
use App\Models\Presentacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FormulariosController extends Controller
{
    // EVENTOS 
    /**
     * Undocumented function
     *
     * @return view evento.index
     */
    public function indexEventos()
    {
        $eventos = Evento::orderBy('idEvento', 'desc')->get();
        return view('formularios.evento.index', compact('eventos'));
    }

    /**
     * Undocumented function
     *
     * @return view evento.create
     */
    public function createEvento()
    {
        return view('formularios.evento.create', compact('data'));
    }

    /**
     * Undocumented function
     *  
     * @param Request $request 
     * @return void
     */
    public function storeEvento(ValidacionEvento $request)
    {
        $image1 = Evento::setImagenMiniatura($request->imagenMin);
        $request->request->add(['imagenMiniatura' => $image1]);

        if ($image2 = Evento::setImagen($request->imagenEv))
            $request->request->add(['imagen' => $image2]);

        if ($archivo = Evento::setArchivo($request->archivo))
            $request->request->add(['archivoPDF' => $archivo]);

        Evento::create($request->all());
        return redirect('evento')->with('mensaje', 'Evento creado exitosamente');
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editEvento($id)
    {
        $data = Evento::findOrFail($id);
        return view('formularios.evento.edit', compact('data'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [int] $id
     * @return \Illuminate\Http\Response
     */
    public function updateEvento(ValidacionEvento $request, $id)
    {
        $evento = Evento::findOrFail($id);
        if ($imagen1 = Evento::setImagenMiniatura($request->imagenMin, $evento->imagenMiniatura))
            $request->request->add(['imagenMiniatura' => $imagen1]);

        if ($imagen2 = Evento::setImagen($request->imagenEv, $evento->imagen))
            $request->request->add(['imagen' => $imagen2]);

        if ($archivo1 = Evento::setArchivo($request->archivo, $evento->archivoPDF))
            $request->request->add(['archivoPDF' => $archivo1]);

        $evento->update($request->all());
        return redirect('evento')->with('mensaje', 'Evento actualizado exitosamente');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [int] $id
     * @return \Illuminate\Http\Response
     */
    public function destroyEvento(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);
        if (Evento::destroy($id)) {
            Storage::disk('public')->delete("imagenes/eventos/miniaturas/$evento->imagenMiniatura");
            Storage::disk('public')->delete("archivos/eventos/$evento->archivoPDF");
            Storage::disk('public')->delete("imagenes/eventos/$evento->imagen");
        }        
        return redirect('evento')->with('mensaje', 'Evento eliminado exitosamente');
    }

    //NOTICIAS

    /**
     * Undocumented function
     *
     * @return view noticia.index
     */
    public function indexNoticias()
    {
        $noticias = Noticia::orderBy('idNoticia', 'desc')->get();
        return view('formularios.noticia.index', compact('noticias'));
    }

    /**
     * Undocumented function
     *
     * @return view noticia.create
     */
    public function createNoticia()
    {
        return view('formularios.noticia.create', compact('data'));
    }

    /**
     * Undocumented function
     *  
     * @param Request $request 
     * @return void
     */
    public function storeNoticia(ValidacionNoticia $request)
    {
        $image1 = Noticia::setImagenInicio($request->imagenPortada);
        $request->request->add(['imagenInicio' => $image1]);

        if ($image2 = Noticia::setImagen($request->imagenNoti))
            $request->request->add(['imagen' => $image2]);

        $slug = Str::slug($request->tituloNoticia,'-');
        $request->request->add(['slug' => $slug]);

        $fecha = Carbon::createFromFormat('d/m/Y',$request->fechaPublicacion);   
        $request->request->add(['fechaPublicacion'=>$fecha]);     

        Noticia::create($request->all());
        return redirect('noticia')->with('mensaje', 'Noticia creada exitosamente');
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editNoticia($slug)
    {              
        $data = Noticia::where('slug','=', $slug)->firstOrFail();
        return view('formularios.noticia.edit', compact('data'));
    }

    /**
     * Undocumented function
     *
     * @param ValidacionNoticia $request
     * @param [type] $slug
     * @return void
     */     
    public function updateNoticia(ValidacionNoticia $request, $slug)
    {             
        $noticia = Noticia::where('slug','=', $slug)->firstOrFail();

        $fecha = Carbon::createFromFormat('d/m/Y',$request->fechaPublicacion);   
        $request->request->add(['fechaPublicacion'=>$fecha]);

        if ($imagen1 = Noticia::setImagenInicio($request->imagenPortada, $noticia->imagenInicio))
            $request->request->add(['imagenInicio' => $imagen1]);

        if ($imagen2 = Noticia::setImagen($request->imagenNoti, $noticia->imagen))
            $request->request->add(['imagen' => $imagen2]);

        $slug = Str::slug($request->tituloNoticia,'-');
        $request->request->add(['slug' => $slug]);           

        $noticia->update($request->all());
        return redirect('noticia')->with('mensaje', 'Noticia actualizada exitosamente');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $slug
     * @return void
     */
    public function destroyNoticia(Request $request, $slug)
    {
        $noticia = Noticia::where('slug','=', $slug)->firstOrFail();
        $id = $noticia->idNoticia;
        if (Noticia::destroy($id)) {
            Storage::disk('public')->delete("imagenes/noticias/$noticia->imagenInicio");            
            Storage::disk('public')->delete("imagenes/noticias/$noticia->imagen");            
        }        
        return redirect('noticia')->with('mensaje', 'Noticia eliminada exitosamente');
    }

    // PRESENTACION

      /**
     * Undocumented function
     *
     * @return view noticia.index
     */
    public function indexPresentacion()
    {
        $presentacion = Presentacion::where('idPresentacion',1)->get();
        return view('formularios.presentacion.index', compact('presentacion'));
    }

    /**
     * Undocumented function
     *
     * @return view noticia.create
     */
    // public function createPresentacion()
    // {
    //     
    // }

    /**
     * Undocumented function
     *  
     * @param Request $request 
     * @return void
     */
    // public function storePresentacion(ValidacionPresentacion $request)
    // {

    //     
    // }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editPresentacion()
    {              
        $data = Presentacion::where('idPresentacion',1)->first();
        return view('formularios.presentacion.edit', compact('data'));
    }

    /**
     * Undocumented function
     *
     * @param ValidacionPresentacion $request
     * @param [type] $id
     * @return void
     */     
    public function updatePresentacion(ValidacionPresentacion $request)
    {             
        $presentacion = Presentacion::where('idPresentacion',1)->first();

        if ($imagen1 = Presentacion::setImagen($request->imagen, $presentacion->fotoDirector))
        $request->request->add(['fotoDirector' => $imagen1]);       

        $presentacion->update($request->all());
        return redirect('presentacion/index')->with('mensaje', 'Información actualizada exitosamente');
    }

    //CONVOCATORIAS

          /**
     * Undocumented function
     *
     * @return view noticia.index
     */
    public function indexConvocatorias()
    {
        $convocatorias = Convocatoria::orderBy('idConvocatoria', 'desc')->get();
        return view('formularios.convocatoria.index', compact('convocatorias'));
    }

    /**
     * Undocumented function
     *
     * @return view noticia.create
     */
    public function createConvocatoria()
    {
        return view('formularios.convocatoria.create', compact('data'));
    }

    /**
     * Undocumented function
     *  
     * @param Request $request 
     * @return void
     */
    public function storeConvocatoria(ValidacionConvocatoria $request)
    {

        if ($archivo1 = Convocatoria::setArchivo($request->infoConvocatoria))
        $request->request->add(['informacionConvocatoria' => $archivo1]);

        Convocatoria::create($request->all());
        return redirect('convocatoria')->with('mensaje', 'Convocatoria creada exitosamente');
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editConvocatoria($id)
    {              
        $data = Convocatoria::findOrFail($id);
        return view('formularios.convocatoria.edit', compact('data'));
    }

    /**
     * Undocumented function
     *
     * @param ValidacionConvocatoria $request
     * @param [type] $id
     * @return void
     */     
    public function updateConvocatoria(ValidacionConvocatoria $request, $id)
    {             
        $convocatoria = Convocatoria::findOrFail($id);

        if ($archivo1 = Convocatoria::setArchivo($request->infoConvocatoria, $convocatoria->informacionConvocatoria))
        $request->request->add(['informacionConvocatoria' => $archivo1]);

        $convocatoria->update($request->all());
        return redirect('convocatoria')->with('mensaje', 'Convocatoria actualizada exitosamente');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function destroyConvocatoria(Request $request, $id)
    {
        Convocatoria::destroy($id);
        return redirect('convocatoria')->with('mensaje', 'Convocatoria eliminada exitosamente');   
        
    }

    //MISION Y VISION 

      /**
     * Undocumented function
     *
     * 
     */
    public function indexMision_vision()
    {
        $presentacion = Presentacion::where('idPresentacion',1)->get();
        return view('formularios.mision_vision.index', compact('presentacion'));
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editMision_vision()
    {              
        $data = Presentacion::where('idPresentacion',1)->first();
        return view('formularios.mision_vision.edit', compact('data'));
    }

    /**
     * Undocumented function
     *
     * @param ValidacionMision_vision $request
     * @param [type] $id
     * @return void
     */     
    public function updateMision_vision(ValidacionMision_vision $request)
    {             
        $presentacion = Presentacion::where('idPresentacion',1)->first(); 
        $presentacion->update($request->all());
        return redirect('mision_vision')->with('mensaje', 'Información actualizada exitosamente');
    }

    //CONTACTO

      /**
     * Undocumented function
     *
     * 
     */
    public function indexContacto()
    {
        $presentacion = Presentacion::where('idPresentacion',1)->get();
        return view('formularios.contacto.index', compact('presentacion'));
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editContacto()
    {              
        $data = Presentacion::where('idPresentacion',1)->first();
        return view('formularios.contacto.edit', compact('data'));
    }

    /**
     * Undocumented function
     *
     * @param ValidacionContacto $request
     * @param [type] $id
     * @return void
     */     
    public function updateContacto(ValidacionContacto $request)
    {             
        $presentacion = Presentacion::where('idPresentacion',1)->first(); 
        $presentacion->update($request->all());
        return redirect('contacto/index')->with('mensaje', 'Información actualizada exitosamente');
    }
    
    //MOVILIDAD

    /**
     * Undocumented function
     *
     * 
     */
    public function indexMovilidad()
    {
        $movilidad = Movilidad::where('idMovilidad',1)->get();
        return view('formularios.movilidad.index', compact('movilidad'));
    }











}
