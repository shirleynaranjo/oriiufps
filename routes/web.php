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
Route::get('evento','EventoController@index')->name('index.evento');
Route::get('evento/show','EventoController@show')->name('show.evento');

//Convenios
Route::get('convenio','ConvenioController@index')->name('index.convenio');

//Convocatorias
Route::get('convocatoria','ConvocatoriaController@index')->name('index.convocatoria');

//Noticias
Route::get('noticia','NoticiaController@index')->name('index.noticia');
Route::get('noticia/show','NoticiaController@show')->name('show.noticia');

//Experiencia
Route::get('experiencia','ExperienciaController@index')->name('index.experiencia');

//Presentacion
Route::get('presentacion','PresentacionController@index')->name('index.presentacion');

//Vision
Route::get('vision','VisionController@index')->name('index.vision');

//Mision
Route::get('mision','MisionController@index')->name('index.mision');

//Contacto
Route::get('contacto','ContactoController@index')->name('index.contacto');