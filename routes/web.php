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

//Eventos
Route::get('eventos','EventoController@index')->name('index.evento');
Route::get('evento/show/{idEvento}','EventoController@show')->name('show.evento');

//Convenios
Route::get('convenios','ConvenioController@index')->name('index.convenio');

//Convocatorias
Route::get('convocatorias','ConvocatoriaController@index')->name('index.convocatoria');

//Noticias
Route::get('noticias','NoticiaController@index')->name('index.noticia');
Route::get('noticia/show/{idNoticia}','NoticiaController@show')->name('show.noticia');

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