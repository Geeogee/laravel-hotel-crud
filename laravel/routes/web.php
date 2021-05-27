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

Route::get('/', 'HotelController@home') -> name('home');

Route::get('employee/{id}', 'HotelController@show') -> name('show');

Route::get('employee/edit/{id}', 'HotelController@edit') -> name('edit');
Route::post('employee/update/{id}', 'HotelController@update') -> name('update');