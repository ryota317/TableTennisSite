<?php

use Illuminate\Support\Facades\Route;

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
Route::get('test', 'UserController@index');
// Route::post('sign_up', 'UserController@signUp');
Route::post('/sign_up', 'UserController@signUp');
Route::post('/sign_in', 'UserController@signIn');


Route::get('/wel', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/practice_info_list', function () {
    return view('practice_info_list');
});

Route::get('/sign_in_page', function () {
    return view('sign_in_page');
});
Route::get('/sign_up_page', function () {
    return view('sign_up_page');
});


Route::get('/profile', function () {
    return view('profile');
});
Route::get('/create_team', function () {
    return view('create_team');
});
Route::get('/practice_partner', function () {
    return view('practice_partner');
});





