<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
//Cuando el controlador administra una unica ruta se usa invoke
{
    public function __invoke(){
            // return view('welcome');
        return view('home');
    }
}
