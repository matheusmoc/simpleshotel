<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProdutoController, MesaController, UsuarioController, OcupanteController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();
Route::middleware(['auth'])->prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('Admin.dashboard');
    });
    // Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('produtos', ProdutoController::class);
    Route::resource('mesas', MesaController::class);
    Route::put('mesas/pedidos/{id}', [MesaController::class, 'adicionarProduto'])->name('mesas.adicionarProduto');
    Route::resource('ocupantes', OcupanteController::class);
    Route::resource('usuarios', UsuarioController::class)->only('index');
});
