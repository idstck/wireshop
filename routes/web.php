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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::livewire('/admin/product', 'product.index')
    ->name('admin.product')
    ->middleware('auth');

Route::livewire('/shop', 'shop.index')
    ->name('shop.index');
Route::livewire('/cart', 'shop.cart')
    ->name('shop.cart');
Route::livewire('/checkout', 'shop.checkout')
    ->name('shop.checkout');
