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

    Route::get('/', 'HomeController@index');
    Route::get('/detil_guides', 'HomeController@guides');
    Route::get('/detil_guides/{id}', 'HomeController@guides');
    Route::get('/allguides', 'HomeController@allguides');
    Route::get('/detil_project', 'HomeController@project');
    Route::get('/allproject', 'HomeController@allproject');
    Route::get('/detil_project/{id}', 'HomeController@project');

 
