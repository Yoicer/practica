<?php

//                             Declaracion de rutas
//   Principal
Route::get('/', function () {
    $nombre = "Luis";
    return view('home',compact('nombre')); // retorno de vista con variable

});

//   Secundaria
Route::get('contacto', function () {
    return 'Hola desde la pagina de contacto'   ;
});

// Con parametros 
Route::get('saludo/{nombre?}', function ($nombre = "invitado") {
    return 'Hola desde la pagina inicial '.$nombre ;
});

// Con nombre
Route::get('contactonos', function(){
    return "Seccion de contactos";
})->name('contactos');

// Manera de retornar vista con poca informaciion
Route::view('/about', 'about')->name('about');
Route::view('/contac', 'contac')->name('contac');
Route::view('/portafolio', 'portafolio')->name('portafolio');


