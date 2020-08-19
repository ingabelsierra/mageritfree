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


Route::get('/', function () {
    return view('auth/login');
});

Route::resource('proyecto/amenazacatalogo','AmenazacatalogoController');
Route::resource('proyecto/activocatalogo','ActivocatalogoController');
Route::resource('proyecto/salvaguardacatalogo','SalvaguardacatalogoController');
Route::resource('proyecto/proyecto','ProyectoController');
Route::resource('proyecto/dominio','DominioController');
Route::resource('proyecto/dimension','DimensionController');
Route::resource('proyecto/activo','ActivoController');
Route::resource('proyecto/amenaza','AmenazaController');
Route::resource('proyecto/salvaguarda','SalvaguardaController');
Route::resource('proyecto/valoracion','ValoracionController');
Route::resource('proyecto/degradacion','DegradacionController');
Route::resource('proyecto/probabilidad','ProbabilidadController');
Route::resource('proyecto/eficaciasobreimpacto','EficaciasobreimpactoController');
Route::resource('proyecto/eficaciasobreprobabilidad','EficaciasobreprobabilidadController');
Route::resource('proyecto/impacto','ImpactoController');
Route::resource('proyecto/riesgo','RiesgoController');
Route::resource('proyecto/informacion','InformacionController');
Route::resource('proyecto/desarrollo','DesarrolloController');
Route::resource('proyecto/degradacionresidual','degradacionresidualController');
Route::resource('proyecto/probabilidadresidual','probabilidadresidualController');
Route::resource('proyecto/impactoresidual','impactoresidualController');
Route::resource('proyecto/riesgoresidual','riesgoresidualController');

Route::resource('proyecto/informacionactivos','InformacionactivosController');

Route::get('proyecto/reportes', 'PdfController@index');
Route::get('proyecto/crear_reporte_poractivo/{tipo}', 'PdfController@crear_reporte_poractivo');
Route::get('proyecto/crear_reporte_general/{tipo}', 'PdfController@crear_reporte_general');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


