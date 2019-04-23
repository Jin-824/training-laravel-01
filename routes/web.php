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

Route::get('/', function () {
    return view('welcome');
});

Route::get('paginate', 'SearchController@index')->name('search.index');

Route::get('/items/create', 'ItemController@create')->name('items.create');
Route::post('/items/store', 'ItemController@store')->name('items.store');
route::resource('items','itemController');


route::get('/categories/create', 'CategoryController@create')->name('categories.create');
route::post('/categories/store','CategoryController@store')->name('categories.store');
route::resource('categories','categoryController');

