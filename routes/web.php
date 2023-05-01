<?php

use App\Http\Controllers\Controller;
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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@store')->name('home.store');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/review', 'ReviewController@index')->name('review');
Route::post('/review', 'ReviewController@store')->name('review.store');
Route::get('/reload', 'ReviewController@reload');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{id}', 'NewsController@show')->name('news.showw');
Route::get('/techbattles', 'TechbattlesController@index')->name('techbattles');
Route::get('/search',  'SearchController@index')->name('search');



Route::group(['prefix' => 'bigbroo', 'namespace' => 'Bigbroo', 'middleware' => 'bigbroo'], function (){
    Route::resource('/news', 'NewsController');
    Route::resource('/gallery', 'GalleryController');
    Route::resource('/video', 'VideoController');
});
//Route::get('/admin', 'App\Http\Controllers\Admin\MainController@index')->name('admin.index');

Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');
