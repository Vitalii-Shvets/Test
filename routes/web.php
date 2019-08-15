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
    return redirect(route('posts.index'));
});

Route::resource('posts', 'PostsController',['only' => [
    'index', 'create', 'store']])->names('posts');

Route::post('posts/search/', 'PostsController@search')->name('posts.search');

