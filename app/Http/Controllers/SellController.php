<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
//Cuando el controlador administra mas de una ruta, se usa mas de un metodo, con el nombre que tu quieras
{
    public function index(){
        return view('modules.sell-module.sell');
    }

    public function create(){
        return view('modules.sell-module.sell-create');
    }
}
