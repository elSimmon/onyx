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
  Route::post('/verify', "ProductController@verify");

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/register_for_training', 'TrainingController@create')->name('register_for_training');
  Route::post('/new_training', 'TrainingController@store')->name('new_training');



  //admin routes
  Route::get('/trainees', 'TrainingController@index')->name('trainees');
