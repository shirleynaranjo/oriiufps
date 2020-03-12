<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Repositories\Noticias;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    protected $noticias;

    public function __construct(Noticia $noticias)
    {
        $this->noticias = $noticias;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $noticias = Noticia::orderBy('idNoticia','desc')->get();
        // return view('noticia.index',compact('noticias')); 
        $noticias = $this->noticias->all();
        return view('noticia.index',compact('noticias'));

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
        // $noticia = Noticia::findOrFail($id);
        // $noticias = Noticia::latest('idNoticia')->take(3)->get();
        // return view('noticia.show',compact('noticia','noticias'));          
        $noticia = $this->noticias->find($id);
        return view('noticia.show',compact('noticia'));  
        
        
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
