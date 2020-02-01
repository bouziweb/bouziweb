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


Auth::routes();



Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account','accountcontroller@index');
Route::resources(['/readMore'=> 'PostController']);
Route::resources(['/user'=> 'AccountUserController']);
Route::resources(['/post'=>'AccountPostController']);
Route::resources(['/Following'=>'FollowerController']);
// Route::resources(['/userAccount'=>'accountcontroller']);
Route::get('/userAccount/{id}','accountcontroller@show');




