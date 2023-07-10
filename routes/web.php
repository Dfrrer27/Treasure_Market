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
use App\Http\Controllers\Auth\CustomLoginController;


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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'show')->name('home');

    Route::get('/category/{category}', 'showCategory')->name('showCategory');
});


Route::controller(SellController::class)->group(function(){
    //ruta, VENDER pagina que administra el publicar ventas
    Route::get('sell', 'index')->name('sell');

    //ruta, VENDER/CREATE (crear o publicar producto)  
    Route::get('sell/create', 'create')->name('sell-create');
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

Route::controller(HistoryController::class)->group(function(){
    //Ruta, HISTORIAL DE VENTA o COMPRA, por la URL esta recibiendo una variable("role"), muestra todos las ventas o compras que hiciste
    Route::get('history/{role}', 'show')->name('history');

    Route::get('history/{role}/{id}', 'show_invoice');
});

//Ruta, SERVICIO AL CLIENTE, 
Route::get('customer', [CustomerController::class, 'index'])->name('customer');

//De aqui en adelante las rutas con usuarios para iniciar sesión y registrarse estan en proceso, porque hemos instalado el paquete JetStream y la verdad aun no se como configurarlo para usarlo como quiero, si me da unos tips sobre que archivos tocar y cuales no, estare eternamente agradecido

//Ruta, CONFIGURACIÓN DE CUENTA, administra la configuracion de tu cuenta
Route::get('account', [AccountController::class, 'index'])->name('account');

//Ruta, 
Route::get('account/username', [AccountController::class, 'update_user'])->name('update_user');

//Ruta, 
Route::get('account/password', [AccountController::class, 'update_password'])->name('update_password');

//JetStream
Route::post('/login', [CustomLoginController::class, 'store'])
    ->middleware('guest')
    ->name('login');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard', [UserController::class, 'showProfile'])->name('dashboard');
    });

// Ruta fallback para redirigir todas las demás rutas que no coincidan con las anteriores, hacia '/'
Route::fallback(function () {
    return redirect('/');
});