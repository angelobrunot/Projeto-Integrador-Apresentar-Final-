<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){

  Route::resource('user', App\Http\Controllers\UserController::class);

  Route::resource('product', App\Http\Controllers\ProductController::class);

  Route::get('/cardapio/{menu}', 'App\Http\Controllers\MenuController@showPubli')->name('menu.public.show');

  Route::resource('menu', App\Http\Controllers\MenuController::class);


});
