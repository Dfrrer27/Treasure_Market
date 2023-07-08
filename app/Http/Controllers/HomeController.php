<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
//Cuando el controlador administra una unica ruta se usa invoke
{
    public function __invoke(){
            // return view('welcome');
        $products = Product::orderBy('descuento', 'desc')->take(5)->get();
        return view('home', ['products' => $products]);
    }
}
