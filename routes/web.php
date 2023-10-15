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
// Route::get('/', function () { //route for landing page
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index']); //route for viewing product list