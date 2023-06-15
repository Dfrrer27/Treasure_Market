<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        return "Bienvenido a la pagina donde se muestra tu carrito de compras";
    }

    public function store(Request $request)
    {
        return "En esta pagina podras rellenar el formulario con tus datos(Datos generales, Forma de pago, etc), para finalizar tu compra";
    }

}
