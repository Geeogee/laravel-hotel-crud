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

Route::get('/', 'EmployeeController@home') -> name('home');

Route::get('employee/{id}', 'EmployeeController@show') -> name('show');

Route::get('employee/edit/{id}', 'EmployeeController@edit') -> name('edit');
Route::post('employee/update/{id}', 'EmployeeController@update') -> name('update');

Route::get('employee/delete/{id}', 'EmployeeController@delete') -> name('delete');