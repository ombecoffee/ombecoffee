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
    Route::get('/project', 'AdminModuleController@project');
    Route::post('/project', 'AdminModuleController@project');
    Route::get('/merchkategori', 'AdminModuleController@merchkategori');
    Route::post('/merchkategori', 'AdminModuleController@merchkategori');
    Route::get('/merch', 'AdminModuleController@merch');
    Route::post('/merch', 'AdminModuleController@merch');
    Route::get('/detail/{id}', 'AdminModuleController@show');
    Route::post('/getview', 'AdminModuleController@getview');
    Route::get('/subscription', 'AdminModuleController@subscription');
    Route::post('/subscription', 'AdminModuleController@subscription');
    Route::get('/storelocation', 'AdminModuleController@storelocation');
    Route::post('/storelocation', 'AdminModuleController@storelocation');
    Route::get('/jadwal/{id}', 'AdminModuleController@jadwal');
    Route::post('/jadwal', 'AdminModuleController@store_jadwal');
    Route::post('/delete-jadwal', 'AdminModuleController@delete_jadwal');
    Route::post('/edit-jadwal', 'AdminModuleController@edit_jadwal');
    Route::post('/edit-show-jadwal', 'AdminModuleController@modal_edit_jadwal');
    Route::get('/careers', 'AdminModuleController@careers');
    Route::post('/careers', 'AdminModuleController@careers');
    Route::get('/applicants', 'AdminModuleController@applicants');
    Route::post('/applicants', 'AdminModuleController@applicants');
    Route::get('/guides', 'AdminModuleController@guides');
    Route::post('/guides', 'AdminModuleController@guides');
    Route::get('/early', 'AdminModuleController@early');
    Route::post('/early', 'AdminModuleController@early');
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

