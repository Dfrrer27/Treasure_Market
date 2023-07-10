<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
//Cuando el controlador administra mas de una ruta, se usa mas de un metodo, con el nombre que tu quieras
{
    public function show($role){
        switch ($role) {
            case 'ventas':
                return view('modules.history-module.sales-history');
            case 'compras':
                return view('modules.categorys.category-watches');
            default:
                // Redirigir a una página de error o página no encontrada si la categoría no coincide
                return abort(404);
        }
    }
}