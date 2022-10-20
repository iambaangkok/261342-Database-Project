<?php
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
// header('Access-Control-Allow-Origin: http://127.0.0.1:3000/');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{ 
/**
* Home Routes
*/
    Route::get('/Random_product_3', 'HomeController@index');
    Route::get('/products', 'ProductController@index');
    Route::get('/products//', 'ProductController@pagination');
    Route::get('/', 'ProductController@index')->name('home.index');
    Route::group(['middleware' => ['guest']], function() {
/**
* Register Routes
*/
    Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');
    Route::get('/register-complete', 'RegisterController@registerComplete')->name('registerComplete.show');
/**
* Login Routes
*/
    Route::get('/login', 'LoginController@show')->name('login.show');
    Route::post('/login', 'LoginController@login')->name('login.perform');
});
    
    Route::group(['middleware' => ['auth']], function() {
/**
* Logout Routes
*/
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        // Route::get('/cart', 'ProductController@cart')->name('cart');
        // Route::get('/add-to-cart/{id}', 'ProductController@addToCart')->name('add.to.cart');
        // Route::delete('/remove-from-cart/{id}', 'ProductController@remove')->name('remove.from.cart');
    });
});