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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('product/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::get('product/{product}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('category/product/{product}', 'App\Http\Controllers\ProductController@removeCategory')->name('category.product.delete');
