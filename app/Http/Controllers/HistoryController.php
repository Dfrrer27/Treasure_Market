<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
//Cuando el controlador administra mas de una ruta, se usa mas de un metodo, con el nombre que tu quieras
{
    public function show($role){
        return "Bienvenido a la pagina donde se muestra el historial de: $role";
    }

    public function show_invoice($role, $id){
        return "En esta pagina se muestra la factura del prroducto $id del historial $role";
    }
}