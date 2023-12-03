<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','OutletMapController@inicio');

Route::get('/admin', 'OutletMapController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Outlets Routes
 */
Route::get('/marcadores', 'OutletMapController@index')->name('outlet_map.index');
Route::resource('outlets', 'OutletController');
