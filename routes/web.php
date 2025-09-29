<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductsController;


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


Route::get('/', function () {
    return view('welcome');
});


// Categories routes
Route::get('/category', [CategoriesController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoriesController::class, 'create'])->name('category.create');
Route::post('/category', [CategoriesController::class, 'store'])->name('category.store');
Route::get('/category/{id}/edit', [CategoriesController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}', [CategoriesController::class, 'update'])->name('category.update');
Route::delete('/categorys/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');


//customers routes
Route::get('/customer', [CustomersController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomersController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomersController::class, 'store'])->name('customer.store');
Route::get('/customer/{id}/edit', [CustomersController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{id}', [CustomersController::class, 'update'])->name('customer.update');
Route::delete('/customer/{id}', [CustomersController::class, 'destroy'])->name('customer.destroy');


//Products Route
Route::get('/products', [ProductsController::class,'index'])->name('products.index'); //untuk menampilkan data products
Route::get('/products/create', [ProductsController::class,'create'])->name('products.create');
Route::post('/products', [ProductsController::class,'store'])->name('products.store');