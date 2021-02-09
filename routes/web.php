<?php

//Rutas con parametros
Route::get('saludo/{nombre}', function ($nombre) {
    return 'Hola desde la pagina inicial '.$nombre ;
});

//tut
Route::get('contacto', function () {
    return 'Hola desde la pagina de contacto'   ;
});