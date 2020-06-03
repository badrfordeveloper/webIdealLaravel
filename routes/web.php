<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;


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



Route::get('/','HomeController@index')->name('home');
Route::get('sitemap',function (){
	set_time_limit(300);


	//SitemapGenerator::create('https://example.com')->getSitemap()->writeToDisk('public', 'sitemap.xml');
	SitemapGenerator::create('https://websites-ideal.com/')->writeToFile('sitemap.xml');
	return "sitemap created !";
});
Route::get('a-propos','HomeController@about');
Route::get('services','HomeController@services');
Route::get('portfolio','HomeController@portfolio');
Route::get('contact','HomeController@contact');
Route::get('blog','HomeController@blog');
Route::get('blog/{id}/{titre}','HomeController@detailArticle');



Route::get('admin', 'AdminController@index');
Route::resource('admin/categories', 'Admin\\CategoriesController');
Auth::routes();


Route::resource('admin/tags', 'Admin\\TagsController');
Route::resource('admin/posts', 'Admin\\PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




