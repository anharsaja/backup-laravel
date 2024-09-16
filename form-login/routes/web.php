<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::post('/login', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');


Route::get('/', 'App\Http\Controllers\LoginController@index')->name('back');

Route::get('/forget', 'App\Http\Controllers\LoginController@forget')->name('forget');