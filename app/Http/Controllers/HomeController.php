<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
//Cuando el controlador administra una unica ruta se usa invoke
{
    public function show(){
        return view('home');
    }

    public function showCategory($category)
    {
        // Redirigir a la vista correspondiente según la categoría seleccionada
        switch ($category) {
            case 'Herramientas':
                return view('modules.categorys.category-tools');
            case 'Relojes y Joyas':
                return view('modules.categorys.category-watches');
            case 'Juguetes':
                return view('modules.categorys.category-toys');
            case 'antigüedades':
                return view('modules.categorys.category-antiques');
            case 'Herramientas para Jardín':
                return view('modules.categorys.category-gardening-tools');
            case 'Ropa y Accesorios':
                return view('modules.categorys.category-clothing');
            case 'Libros, Revistas y Comics':
                return view('modules.categorys.category-books');
            case 'Muebles':
                return view('modules.categorys.category-furniture');
            case 'Instrumentos Musicales':
                return view('modules.categorys.category-musical-instruments');
            case 'Electrodomésticos':
                return view('modules.categorys.category-home-appliances');
            default:
                // Redirigir a una página de error o página no encontrada si la categoría no coincide
                return abort(404);
        }
    }

}
