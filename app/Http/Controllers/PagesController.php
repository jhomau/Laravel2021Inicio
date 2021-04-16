<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function saludo($nombre = "Invitado"){
        $html = "<h2>Contenido html</h2>"; //Ingreso el usuario es un script
        $script = "<script>alert('Problema XSS - Cross Site Scripting! ')</script>";
        $consolas = [
            'Play Station 4',
            'Xbox One',
            'Wii U'
        ];
    
        return view('saludo',compact('nombre','html','script','consolas'));
    }
    public function contacto()
    {
        return view('contactos');
    }


}
