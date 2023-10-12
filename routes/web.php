<?php

use App\Http\Controllers\CategoryController;
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
// route sẽ hiển thị danh mục - category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
//DELETE category/{id} phương thức DELETE, khác với GET, hay POST
Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
// route sẽ hiển thị form login
Route::get('login', [HomeController::class, 'login'])->name('home.login');
// route này validate dữ liệu khi submit form
Route::post('login', [HomeController::class, 'check_login']);

// route sẽ hiển thị form upload
Route::get('upload', [HomeController::class, 'upload'])->name('home.upload');
// route này validate dữ liệu khi submit form
Route::post('upload', [HomeController::class, 'handle_upload']);

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
