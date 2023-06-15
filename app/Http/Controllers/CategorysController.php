<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorysController extends Controller
//Cuando el controlador administra mas de una ruta, se usa mas de un metodo, con el nombre que tu quieras
{
    public function show($category){
        return "En esta pagina se muestra los productos con la categoria: $category";
    }

    public function show_products($category, $id){
        return "En esta pagina se muestra el producto $id de la categoria: $category";
    }
}