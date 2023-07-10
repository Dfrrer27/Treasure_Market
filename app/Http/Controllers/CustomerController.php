<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
//Cuando el controlador administra una unica ruta se usa invoke
{
    public function index(){
        // return view('welcome');
        return view('modules.service-module.service');
    }
}

