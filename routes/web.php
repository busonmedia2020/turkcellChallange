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

Route::get('/', 'App\Http\Controllers\PageController@index')->name('index');
Route::get('/insert-customer', 'App\Http\Controllers\PageController@insertCustomer')->name('insert-customer');
Route::post('/insert-customer-action', 'App\Http\Controllers\PageController@insertCustomer')->name('insert-customer-action');
