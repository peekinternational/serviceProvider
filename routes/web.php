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

// Route::get('/', function () {
// });
Route::get('/update', function () {
    return view('user_profile.update');
});
Route::post('create', 'RegisterController@store');
Route::post('login', 'RegisterController@login');

Route::get('/', 'RegisterController@index');
Route::get('/update/{id}', 'RegisterController@edit');
Route::post('/update/{id}', 'RegisterController@update');

Route::get('profile_view/{id}', 'RegisterController@show');
Route::get('logout', 'RegisterController@logout');
