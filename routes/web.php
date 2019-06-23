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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('auth/register', 'Auth\RegisterController@register');

Route::get('auth/login', 'Auth\LoginController@showLoginForm');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');


// jts 関連？
Route::get('/login2', 'LoginController@getLogin');
Route::post('/login2', 'LoginController@postLogin');
Route::get('/logout2', 'LoginController@postLogout');




// 以下 momotani のを動作させるための設定 (blade にroute('logout')とかあるから）
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login'); // authenticate() 後のリダイレクト
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/mock_0', 'HomeController@mock_1')->name('mock_0');
Route::get('/mock_1', 'HomeController@mock_1')->name('mock_1');
Route::get('/mock_2', 'HomeController@mock_2')->name('mock_2');
Route::get('/mock_3', 'HomeController@mock_3')->name('mock_3');
Route::get('/mock_4', 'HomeController@mock_4')->name('mock_4');
Route::get('/mock_5', 'HomeController@mock_5')->name('mock_5');
Route::get('/mock_6', 'HomeController@mock_6')->name('mock_6');

//Route::get('/search', 'HomeController@search'); // test
Route::post('/search', 'HomeController@search');