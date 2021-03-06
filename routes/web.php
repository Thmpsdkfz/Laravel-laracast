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

//Esto es equivalente a las rutas inferiores.
Route::resource('projects','ProjectController'); 
//

Route::resource('clients','ClientController');

// Route::get('/projects','ProjectController@index');

// Route::get('/projects/create','ProjectController@create');

// Route::get('/projects/{project}','PorjectController@show');

// Route::post('/projects','ProjectController@store');

// Route::get('/projects/{project}/edit','ProjectController@edit');

// Route::patch('/projects/{project}','ProjectController@update');

// Route::delete('/projects/{project}','ProjectController@destroy');

