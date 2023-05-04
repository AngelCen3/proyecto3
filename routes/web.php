<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
Route::get    Consultar
Route:: post  Guardar
Route::delete Eliminar
Route::put    Actualizar*/

Route::get('/', function () {
    return 'Ruta Home';
});

Route::get('blog', function(){
    return 'Listado de publicasiones';
});

Route::get('blog/{slug}', function($slug){
    //simulamos una consulta a base de datos 
    return $slug;
});

Route::get('buscar', function(Request $request){
    return $request->all();
});
