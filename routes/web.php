<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\cat;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', function () {
    $cats = cat::all();
    return view('about')->with('cats', $cats);
})->name('about');


Route::get('/destroy', function () {
    Cart::destroy();
});


Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/{name}', 'ProductsController@show')->name('products.show');


Route::post('/ajax', 'CartController@ajax')->name('ajax');
Route::post('/update', 'CartController@update')->name('cart.update');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/remove/{id}', 'CartController@destroy')->name('cart.destroy');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
