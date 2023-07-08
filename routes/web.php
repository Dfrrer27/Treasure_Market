<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta principal, HOME
Route::get('/', HomeController::class)->name('home');

Route::controller(SellController::class)->group(function(){
    //ruta, VENDER pagina que administra el publicar ventas
    Route::get('sell', 'index');

    //ruta, VENDER/CREATE (crear o publicar producto)  
    Route::get('sell/create', 'create');
});

Route::controller(CartController::class)->group(function(){
    //ruta, CARRITO DE COMPRAS, administra el carrito de compras
    Route::get('cart', 'index');
    
    Route::get('cart/finalize-purchase', 'store');
});

Route::controller(OffersController::class)->group(function(){
    //ruta, OFERTAS, administra las ofertas de los productos 
    Route::get('offers', 'index');

    //Ruta, OFERTAS, por la URL esta recibiendo una variable("offers"), muestra un producto de oferta
    Route::get('offers/{offer}', 'show');
});

Route::controller(CategorysController::class)->group(function(){
    //Ruta, CATEGORYS, por la URL esta recibiendo una variable("category"), muestra todos los producto de una categoria
    Route::get('categorys/{category}', 'show');

    //Ruta, CATEGORYS y PRODUCT, por la URL esta recibiendo dos variable("category", "product"), muestra una los producto de una categoria
    Route::get('categorys/{category}/{id}', 'show_products');
});

Route::controller(HistoryController::class)->group(function(){
    //Ruta, HISTORIAL DE VENTA o COMPRA, por la URL esta recibiendo una variable("role"), muestra todos las ventas o compras que hiciste
    Route::get('history/{role}', 'show');

    Route::get('history/{role}/{id}', 'show_invoice');
});

//Ruta, SERVICIO AL CLIENTE, 
Route::get('customer', CustomerController::class);

//De aqui en adelante las rutas con usuarios para iniciar sesión y registrarse estan en proceso, porque hemos instalado el paquete JetStream y la verdad aun no se como configurarlo para usarlo como quiero, si me da unos tips sobre que archivos tocar y cuales no, estare eternamente agradecido

//Ruta, CONFIGURACIÓN DE CUENTA, administra la configuracion de tu cuenta
Route::get('account', [AccountController::class, 'index'] );

//Ruta, 
Route::get('account/username', [AccountController::class, 'update_user']);

//Ruta, 
Route::get('account/password', [AccountController::class, 'update_password']);

//JetStream
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->
    group(function () { Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
//     ->group(function () {
//         Route::get('/dashboard', [UserController::class, 'showProfile'])->name('dashboard');
//     });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->
//     group(function () { Route::get('/', function () {
//         return view('home');
//     })->name('home');
// });

// Ruta fallback para redirigir todas las demás rutas que no coincidan con las anteriores, hacia '/'
Route::fallback(function () {
    return redirect('/');
});