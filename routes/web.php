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
    return view('welcome');/*first page name*/
});

//Route::get('list','Users@list');  /*user name what we set in nav in layoyt in header*/
Route::get('login','Users@login');
Route::post('loginsubmit','Users@loginsubmit');

Route::get('sign','Users@signup');
Route::post('signupsubmit','Users@signsubmit');

