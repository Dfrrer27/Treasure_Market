<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
//Cuando el controlador administra una unica ruta se usa invoke
{
    public function __invoke(){
            // return view('welcome');
        return "Bienvenido a la pagina donde se rellena el formulario para enviarselo al servicio al cliente";
    }
}

