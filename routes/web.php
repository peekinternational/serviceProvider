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
Route::get('/', function () {
    return view('user_profile.home');
});
Route::get('/register', function () {
    return view('user_profile.create');
});
Route::get('/login', function () {
    return view('user_profile.login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/edit', function () {
    return view('user_profile.update');
});
Route::get('/', function () {
    return view('user_profile.home');
});
Route::get('/landing', function () {
    return view('user_profile.landing_page');
});
Route::get('view_people', function () {
    return view('user_profile.people');
});
Route::get('profile', function () {
    return view('user_profile.view');
});
Route::get('skills', function () {
    return view('user_profile.skill_search');
});
Route::get('/about', function () {
    return view('user_profile.about');
});
Route::get('/contact', function () {
    return view('user_profile.contact');
});

Route::get('skill_search/', function () {
    return view('user_profile.skill_search');
});


Route::post('create_r', 'RegisterController@store');
Route::post('Account/login', 'RegisterController@login');


Route::get('people', 'RegisterController@index');

Route::get('edit/{id}', 'RegisterController@edit');
Route::post('update/{id}', 'RegisterController@update');
Route::post('updateProfile', 'RegisterController@updateProfile');


Route::get('profile_view/{id}', 'RegisterController@show');
Route::get('logout', 'RegisterController@logout');
Route::post('upload', 'RegisterController@Upload');
Route::post('imageUpload/{id}', 'RegisterController@imageUpload');
Route::post('coverUpload/{id}', 'RegisterController@coverUpload');
// Route::get('skill_search/{skill}', 'RegisterController@showdata');
Route::get('search', 'RegisterController@search');
// Route::post('sendemail', 'RegisterController@ship');
Route::post('contact', 'RegisterController@contact');
