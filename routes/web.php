<?php

use App\Http\Controllers\HomeController;
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
})->name('landing');

Auth::routes();

Route::group(['namespace' => "App\Http\Controllers"], function(){

    Route::get('/home', 'HomeController@index', 'index')->name('home');

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
        Route::get('/', 'HomeController@admin')->name('admin');
    });


    Route::group(['prefix' => 'customer', 'middleware' => ['auth', 'customer']], function(){
        Route::get('/', 'HomeController@customer')->name('customer');
    });

    Route::group(['prefix' => 'seller', 'middleware' => ['auth', 'seller']], function(){
        Route::get('/', 'HomeController@seller')->name('seller');
    });

});







