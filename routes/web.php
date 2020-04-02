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



Route::get('/','HomeController@index');
Route::get('a-propos','HomeController@about');
Route::get('services','HomeController@services');
Route::get('portfolio','HomeController@portfolio');
Route::get('contact','HomeController@contact');

