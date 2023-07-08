<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffersController extends Controller
//Cuando el controlador administra mas de una ruta, se usa mas de un metodo, con el nombre que tu quieras
{
    public function index(){
        return view('modules.offers-module.offers');
    }

    public function show($offer){
        return "En esta pagina se muestra el producto de oferta: $offer";
    }
}
