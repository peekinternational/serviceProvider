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

Route::get('/create', function () {
    return view('user_profile.create');
});
Route::get('/login', function () {
    return view('user_profile.login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/update', function () {
    return view('user_profile.update');
});
Route::get('/', function () {
    return view('user_profile.home');
});
Route::get('People', function () {
    return view('user_profile.people');
});
Route::get('profile-view', function () {
    return view('user_profile.profile_view');
});

Route::post('create', 'RegisterController@store');
Route::post('login', 'RegisterController@login');

Route::get('profile', 'RegisterController@index');
Route::get('/update/{id}', 'RegisterController@edit');
Route::post('/update/{id}', 'RegisterController@update');

Route::get('profile_view/{id}', 'RegisterController@show');
Route::get('logout', 'RegisterController@logout');
Route::post('upload', 'RegisterController@Upload');
Route::get('profile/{skill}', 'RegisterController@showdata');
Route::get('search', 'RegisterController@search');
