<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
//Cuando el controlador administra mas de una ruta, se usa mas de un metodo, con el nombre que tu quieras
{
    public function index(){
        return view('modules.cart-module.cart');
    }

    public function store(Request $request){
        return "En esta pagina podras rellenar el formulario con tus datos(Datos generales, Forma de pago, etc), para finalizar tu compra";
    }
}
