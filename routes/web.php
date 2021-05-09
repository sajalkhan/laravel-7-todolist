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

 //Route::get('/', 'HomeController');

// Route::get('/about', 'Homecontroller@about');

Route::get('/','TodosController@index');
Route::get('/{todo}','TodosController@show');
Route::get('/Todo/createTodos','TodosController@create');
Route::post('save','TodosController@save');
Route::get('/{todoId}/editTodo', 'TodosController@editTodo');
Route::post('update/{todoId}', 'TodosController@update');
Route::get('/{todoId}/deleteTodo', 'TodosController@deleteTodo');
Route::get('/{todoId}/completed', 'TodosController@completed');


