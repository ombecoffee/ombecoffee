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

Route::prefix('careers')->group(function() {
    Route::get('/', 'CareerModuleController@index');
    Route::post('/entry-applicants', 'CareerModuleController@entry_applicants');
    Route::post('/show-modal-applicants', 'CareerModuleController@modal_applicants');

});
