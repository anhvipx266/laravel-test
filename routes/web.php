<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// route sẽ hiển thị form login
Route::get('login', [HomeController::class, 'login'])->name('home.login');
// route này validate dữ liệu khi submit form
Route::post('login', [HomeController::class, 'check_login']);

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
