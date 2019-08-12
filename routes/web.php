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
    return view('home');
});
Route::get('/location', function () {
    return view('location');
});
// Route::get('/careers', function () {
//     return view('careers');
// });
Route::get('/our', function () {
    return view('our');
});
Route::get('/subs', function () {
    return view('subs');
});
Route::get('/merch', function () {
    return view('merch');
});
Route::get('/guides', function () {
    return view('guides');
});
Route::get('/detil_guides', function () {
    return view('detil_guides');
});
Route::get('/detil_project', function () {
    return view('detil_project');
});
Route::get('/detil_our', function () {
    return view('detil_our');
});

