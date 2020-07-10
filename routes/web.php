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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'categoryController@index');
Route::get('/category/create', 'categoryController@create');
Route::post('/category', 'categoryController@store');
Route::delete('category/{id}', 'categoryController@destroy');
Route::get('category/{id}/edit', 'categoryController@edit');
Route::Patch('category/{id}', 'categoryController@update');

Route::get('/post', 'postController@index');
Route::get('/post/create', 'postController@create');
Route::post('/post', 'postController@store');
Route::delete('post/{id}', 'postController@destroy');
Route::get('post/{id}/edit', 'postController@edit');
Route::Patch('post/{id}', 'postController@update');

Route::get('/photo', 'photosController@index');
Route::get('/photo/create', 'photosController@create');
Route::post('/photo', 'photosController@store');
Route::delete('photo/{id}', 'photosController@destroy');
Route::get('photo/{id}/edit', 'photosController@edit');
Route::Patch('photo/{id}', 'photosController@update');

Route::get('/album', 'albumController@index');
Route::get('/album/create', 'albumController@create');
Route::post('/album', 'albumController@store');
Route::delete('album/{id}', 'AlbumController@destroy');
Route::get('album/{id}/edit', 'albumController@edit');
Route::Patch('album/{id}', 'albumController@update');
