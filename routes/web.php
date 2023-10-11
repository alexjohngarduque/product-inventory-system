<?php

use App\Http\Controllers\ProductController;
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

//ROUTES = this is where you can give an url for your views, and access controller functions
Route::get('/', function () { //route for landing page
    return view('welcome');
});

Route::get('/product',[ProductController::class, 'index'])->name('product.index'); //route for product page (display list of products)
Route::get('/product/create',[ProductController::class, 'create'])->name('product.create'); //route for addding a new product page
Route::post('/product/create',[ProductController::class, 'store'])->name('product.store'); //route that serves as a setter for new product
Route::get('/product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit'); //route for editing product details
Route::put('/product/{product}/update',[ProductController::class, 'update'])->name('product.update'); //route for updating product details
Route::delete('/product/{product}/delete',[ProductController::class, 'delete'])->name('product.delete'); //route for deleting a product

