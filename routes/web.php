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
Route::get('/links',function(){
    echo "<a href=". route('contacto').">Contactos</a><br>";
    echo "<a href=". route('contacto').">Contactos</a><br>";
    echo "<a href=". route('contacto').">Contactos</a><br>"; //Usando alias cambiamos la ruta y se mantiene el codigo
    echo "<a href='contacto'>Contactos</a><br>"; // No funciona por que no usa alias sino una ruta antigua
});
/*Route::get('contactame',['as'=>'contacto',function(){
    return "Hola desde pagina contacto";
}]);
/* Route::get('saludo/{nombre?}',function($nombre = "invitado"){ //Se usa ? para poder usar un nombre por defecto en caso que no se use ningun nombre
    return "Saludos $nombre";
})->where('nombre',"[A-Za-z]+");//expresion regular para que no se use numeros
*/

/*P/7/ABRIL/21 */
/* Manejo de vistas de HTML simples || Uso de alias para redireccionamiento de rutas*/
Route::get('/',['as'=>'home',function(){
    return view('home');
}]);
Route::get('saludo/{nombre?}',['as'=>'saludo',function($nombre = "Invitado"){
    //return view('saludo',['nombre'=>$nombre]); // Otra forma de enviar parametro por ruta
    //return view('saludo')->with(['pasar'=>$nombre]); // pasar es el nombre para la recupera en la vista el dato de NOMBRE o lo que se envie por ruta
    
    $html = "<h2>Contenido html</h2>"; //Ingreso el usuario es un script
    $script = "<script>alert('Problema XSS - Cross Site Scripting! ')</script>";
    $consolas = [
        'Play Station 4',
        'Xbox One',
        'Wii U'
    ];

    return view('saludo',compact('nombre','html','script','consolas'));
}]);
Route::get('contactame',['as'=>'contacto',function(){
    return view('contactos');
}]);
/* */