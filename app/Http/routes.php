<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'UserManager@index');
Route::post('/login', ['as' => 'login', 'uses' => 'UserManager@login']);
Route::get('/user', ['as' => 'user', 'uses' => 'UserManager@user']);
Route::get('/post', 'ManagerPosts@index');
Route::get('/add', 'ManagerPosts@add');
Route::get('/edit/{id}', 'ManagerPosts@edit');
Route::post('/addpost', ['as' => 'add-post', 'uses' => 'ManagerPosts@addpost']);
Route::post('/editpost', ['as' => 'edit-post', 'uses' => 'ManagerPosts@editpost']);
Route::post('/delete', 'ManagerPosts@delete');
Route::post('/copy', 'ManagerPosts@copy');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
