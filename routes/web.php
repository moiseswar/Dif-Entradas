<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/' , 'ControladorImgenesget@show')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

Route::get('/Entrada', 'ControladorBDregistroEntradas@create')->name('vstregistro');
Route::post('/Entrada/Registradno', 'ControladorBDregistroEntradas@store')-> name('entradas.store');
   //Consultas
Route::get('/dash/Entradas','ControladorBDEntradas@index')->name('entradas.index');
Route::get('/dash/TrabajoSocial/Entradas','ControladorBDEntradas@entradasTrabajoSocial')->name('entradas.TrabajoSocial');
Route::post('/dash/Entradas/ActStatus/{id}','ControladorBDEntradas@update')->name('entradas.statusuptd');

//Comentarios
Route::post('/dash/Entradas/ActStatus/{id}','ControladorBDEntradas@update')->name('entradas.statusuptd');
Route::post('/dash/Entradas/Coments/update/{id}','ControladorBDEntradas@updateComent')->name('entradas.coments');
Route::get('/dash/Entradas/Data/{id}','ControladorBDEntradas@show')->name('entradas.detalle');
//Desayunos
Route::get('/dash/Desayunos/Registro', 'ControladorBDDesayunos@create')->name('vstregistroD');
Route::post('/dash/Desayunos/Registro/Registrando', 'ControladorBDDesayunos@store')-> name('desayunos.store');
Route::get('/dash/Desayunos/Padron','ControladorBDDesayunos@index')->name('desayunos.index');
Route::get('/dash/Desayunos/Padron/{id}', 'ControladorBDDesayunos@show')->name('desayunos.show');
Route::post('/dash/Desayunos/Padron/Actualizando/{id}', 'ControladorBDDesayunos@update')->name('desayunos.update');
Route::delete('/dash/desayunos/Padron/Eliminando/{id}', 'ControladorBDDesayunos@destroy')->name('desayunos.delete');

Route::get('/dash/RedMovil/Solicitudes','ControladorBDRedmovil@index')->name('redmovil.index');

//Imagenes
Route::get('/dash/Imagenes', 'ControladorImgenes@index')->name('imagenes.index');
Route::post('/dash/Imagenes/Registrando', 'ControladorImgenes@store')-> name('imagenes.store');
Route::post('/dash/Imagenes/eliminando/{id}', 'ControladorImgenes@destroy')-> name('imagenes.destroy');