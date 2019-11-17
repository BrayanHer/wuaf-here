<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/index', function () {
    return view('adopcion.Contenido');
});
Route::get('/proceso-de-adopcion', function () {
    return view('adopcion.Proceso_adopcion');
});
Route::get('/solicitud-de-adopcion', function () {
    return view('adopcion.Solicitud_adopcion');
});
