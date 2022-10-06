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

<<<<<<< HEAD
Route::group(['namespace'=>  'App\Http\Controllers'], function()
{
    
    /*** Home Routes*/
    Route::get('/', 'ProductController@index')->name('home.index');

    /*** Register Routes*/
    Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');
   
    
});

Route::get('/register-complete', function () {
    return view('register-complete');
});
=======
Route::resource('products' , ProductController::class);Result:
>>>>>>> 870e48f085876872562d731babea789a7a2ddf06
