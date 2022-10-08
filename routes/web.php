<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['namespace'=>  'App\Http\Controllers'], function()
// {
//     Route::group(['middleware' => ['guest']], function() {
        
//     /* Home Routes*/
//     Route::get('/', 'ProductController@index')->name('home.index');

//     /*** Register Routes*/
//     Route::get('/register', 'RegisterController@show')->name('register.show');
//     Route::post('/register', 'RegisterController@register')->name('register.perform');
   
    
// });
// });

// Route::get('/register-complete', function () {
//     return view('register-complete');
// });


//Route::resource('products' , ProductController::class);Result:


Route::group(['namespace' => 'App\Http\Controllers'], function()
{ 
/**
* Home Routes
*/
    Route::get('/', 'ProductController@index')->name('home.index');
    Route::group(['middleware' => ['guest']], function() {
/**
* Register Routes
*/
    Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');
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
