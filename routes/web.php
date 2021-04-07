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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*P/7/ABRIL/21 */
/*Inicio Laravel rutas de laravel y uso de alias de rutas y envio por rutas*/
Route::get('/',function(){
    echo "<a href=". route('contacto').">Contactos</a><br>";
    echo "<a href=". route('contacto').">Contactos</a><br>";
    echo "<a href=". route('contacto').">Contactos</a><br>"; //Usando alias cambiamos la ruta y se mantiene el codigo
    echo "<a href='contacto'>Contactos</a><br>"; // No funciona por que no usa alias sino una ruta antigua
});
Route::get('contactame',['as'=>'contacto',function(){
    return "Hola desde pagina contacto";
}]);
Route::get('saludo/{nombre?}',function($nombre = "invitado"){ //Se usa ? para poder usar un nombre por defecto en caso que no se use ningun nombre
    return "Saludos $nombre";
})->where('nombre',"[A-Za-z]+");//expresion regular para que no se use numeros
/* */
