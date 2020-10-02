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

Route::get('/', 'EmployeeController@index') -> name('emp.index');

Route::get('/emp/create', 'EmployeeController@create') -> name('emp.create');

Route::get('/emp/{id}', 'EmployeeController@show') -> name('emp.show');
