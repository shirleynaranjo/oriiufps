<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Noticia;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $noticias;
    protected $eventos;

    public function __construct(Noticia $noticias, Evento $eventos)
    {
        $this->noticias = $noticias;
        $this->eventos = $eventos;
    
    }
    
    public function index()
    {
        // $noticias = $this->noticias->all()->take(4); 
        // $eventos = $this->eventos->all();      
        $noticias = Noticia::latest('idNoticia')->take(4)->get();    
        $eventos = Evento::latest('idEvento')->get();          
        return view('inicio',compact('noticias','eventos'));          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
