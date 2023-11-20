<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\FormController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', ProductoController::class);

Auth::routes();

//navbar
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/services', [App\Http\Controllers\ServiciosController::class, 'services'])->name('services');
Route::get('/contact', [App\Http\Controllers\ContactoController::class, 'contact'])->name('contact');
Route::get('/catalog', [App\Http\Controllers\CatalogoController::class, 'catalog'])->name('catalog');

Route::get('/producto/create', [App\Http\Controllers\ProductoController::class, 'create'])->name('create');
Route::get('/producto/index', [App\Http\Controllers\FormController::class, 'form'])->name('form');

Route::get('/edit/{id}', [EditController::class, 'edit'])->name('edit');


// Route::get('/productos/create',[productosController::class, 'create'])->name('ProductosCreate');
