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
    return view('home');
});
/*
 * GET /posts ( index )
 * GET /posts/{id} ( show )
 * GET /posts/create ( create )
 * POST /posts ( store )
 * PATCH /posts/{id} ( update )
 * GET /posts/{id}/edit ( edit )
 * DELETE /posts/{id} ( destroy )
 */
//Route::get('/posts', 'PostsController@index');
//Route::get('/posts/{id}', 'PostsController@show');
//Route::get('/posts/create', 'PostsController@create');
//Route::post('/posts', 'PostsController@store');
//Route::patch('/posts/{id}', 'PostsController@update');
//Route::get('/posts/{id}/edit', 'PostsController@edit');
//Route::delete('/posts/{id}', 'PostsController@destroy');

Route::resource('posts', 'PostsController');
