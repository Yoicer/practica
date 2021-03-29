<?php

//                             Declaracion de rutas
//   Principal
Route::get('/', function () {
    $nombre = "Luis";
    return view('home',compact('nombre')); // retorno de vista con variable

})->name('home');

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

Route::post('contac', 'MessagesController@store');

//ruta de la vista portafolio con referencia a la funcion index del controlador
Route::get('/portafolio', 'PortafolioController@index')->name('portafolio');


