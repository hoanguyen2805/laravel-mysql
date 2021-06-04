<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->as('admin.')->group(function () {
    Route::prefix('/user')->as('user.')->group(function () {
        Route::get('/list', [UserController::class, 'getUsers'])->name('list');
        Route::get('/delete/{id}', [UserController::class, 'deleteUser'])
            ->where('id', '[0-9]+')->name('delete');
    });
    Route::prefix('/product')->as('product.')->group(function () {
        Route::get('/list', [ProductController::class, 'getProducts'])->name('list');
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])
            ->where('id', '[0-9]+')->name('delete');
    });
});
