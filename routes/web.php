<?php

use Illuminate\Support\Facades\Route;

/*P/16/ABRIL/21 */
/* Manejo de Controladores para un codigo mas limpio y entendible*/
Route::get('/',['as'=>'home','uses' => 'PagesController@home'
]);
Route::get('saludo/{nombre?}',['as'=>'saludo','uses'=>'PagesController@saludo']);
Route::get('contactame',['as'=>'contacto','uses' => 'PagesController@contacto'])->where('nombre','[A-Za-z]+');