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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return 'welcom-user';
});

Route::get('/user/gg/{id}', function ($id) {
    return $id;
});

Route::get('/user/tt/{id?}', function () {
    return 'iiid';
})->name('t');

Route::namespace('FRONY')->group(function() {
    Route::get('hh','TestController@showtest');
    Route::get('kk','TestController@showtest1');
});

/*Route::prefix('user')->group(function() {
    Route::get('/first','UserController@Usertest');
});*/

Route::group(['prefix' => 'user','middleware' => 'auth'],function() {
    Route::get('/first','UserController@Usertest');
});

Route::group(['namespace' => 'Test'],function() {
    Route::get('add','VController@Tez');
});


Route::get('login', function () {
    return 'You should be loged';
})->name('login');

Route::resource('news','NewsController');

Route::get ('test', 'FRONY\TestController@showtest1' );

Route::get('/land', function () {
    return view('land');
});

Route::get('/ab', function () {
    return view('ab');
});

Auth::routes(['verify' =>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function () {
    return "TERBAHHHHHH";
});

Route::get('/logout', function () {
    return "TEj";
});

