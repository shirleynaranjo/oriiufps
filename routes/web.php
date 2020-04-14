<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;

//Inicio
Route::get('/', 'InicioController@index')->name('inicio');
Route::get('/form', 'InicioController@create');

//Eventos
Route::get('eventos','EventoController@index')->name('index.evento');
Route::get('evento/show/{idEvento}','EventoController@show')->name('show.evento');

//Convenios
Route::get('convenios','ConvenioController@index')->name('index.convenio');

//Convocatorias
Route::get('convocatorias','ConvocatoriaController@index')->name('index.convocatoria');

//Noticias
Route::get('noticias','NoticiaController@index')->name('index.noticia');
// Route::get('noticia/show/{idNoticia}','NoticiaController@show')->name('show.noticia');
Route::get('noticia/show/{slug}','NoticiaController@show')->name('show.noticia');

//Experiencia
Route::get('experiencias','ExperienciaController@index')->name('index.experiencia');

//Presentacion
Route::get('presentacion','PresentacionController@index')->defaults("idPresentacion", "1")->name('index.presentacion');

//Vision
Route::get('vision','VisionController@index')->defaults("idPresentacion", "1")->name('index.vision');

//Mision
Route::get('mision','MisionController@index')->defaults("idPresentacion", "1")->name('index.mision');

//Contacto
Route::get('contacto','ContactoController@index')->name('index.contacto');

//Movilidad
Route::get('movilidad/docente','MovilidadController@indexDocente')->name('index.movilidadD');
Route::get('movilidad/estudiante','MovilidadController@indexEstudiante')->name('index.movilidadE');
Route::get('movilidad/comunidad_extranjera','MovilidadController@indexExtranjera')->name('index.movilidadEx');

//Formularios
    //Eventos
Route::get('evento','FormulariosController@indexEventos')->name('evento');
Route::get('evento/crear','FormulariosController@createEvento')->name('crear_evento');
Route::post('evento','FormulariosController@storeEvento')->name('guardar_evento');
Route::get('evento/{id}/editar','FormulariosController@editEvento')->name('editar_evento');
Route::put('evento/{id}','FormulariosController@updateEvento')->name('actualizar_evento');
Route::delete('evento/{id}','FormulariosController@destroyEvento')->name('eliminar_evento');
    //Noticias
Route::get('noticia','FormulariosController@indexNoticias')->name('noticia');
Route::get('noticia/crear','FormulariosController@createNoticia')->name('crear_noticia');
Route::post('noticia','FormulariosController@storeNoticia')->name('guardar_noticia');
Route::get('noticia/{slug}/editar','FormulariosController@editNoticia')->name('editar_noticia');
Route::put('noticia/{slug}','FormulariosController@updateNoticia')->name('actualizar_noticia');
Route::delete('noticia/{slug}','FormulariosController@destroyNoticia')->name('eliminar_noticia');
    //Convocatorias
Route::get('convocatoria','FormulariosController@indexConvocatorias')->name('convocatoria');
//Experiencias
Route::get('experiencia','FormulariosController@indexExperiencias')->name('experiencia');
//Presentacion
Route::get('presentacion/index','FormulariosController@indexPresentacion')->name('presentacion');
//Contacto
Route::get('contacto','FormulariosController@indexContacto')->name('contacto');
//Movilidad
Route::get('movilidad','FormulariosController@indexMovilidad')->name('movilidad');