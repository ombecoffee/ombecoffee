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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminModuleController@index');
    Route::post('/', 'AdminModuleController@index');
    Route::get('/ourcoffee', 'AdminModuleController@ourcoffee');
    Route::post('/ourcoffee', 'AdminModuleController@ourcoffee');

});


// Route::get('/', function () {
//     return view('auth/login');
// });
// Route::group(['middleware' => ['auth','web','role']], function () {
//     Route::get('/',function (){
//         return view('dashboard');
//     });    
//     Route::get('/logout', function () {
//         Auth::logout();
//         return redirect('/login');
//     });
// });

