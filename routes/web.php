<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ArticleController@index');

Route::get('articles', 'ArticleController@index');

Route::get('articles/detail/{id}', 'ArticleController@detail');

Route::get('products/', 'Product\ProductController@index' );


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('articles/add', 'ArticleController@add');
Route::post('articles/add', 'ArticleController@create');
Route::get('articles/delete/{id}','ArticleController@delete');