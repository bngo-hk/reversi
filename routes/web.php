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
Route::get('/user', 'Auth\UserController@index')->name('user');
Route::get('/select2', 'Select2Controller@index')->name('select2');
Route::post('/send','ChatController@addMessage');
Route::get('/get','ChatController@showMessage');
Route::get('/chat',function(){
    return view('chat');
  });
