<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionEvento;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormulariosController extends Controller
{
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
}
