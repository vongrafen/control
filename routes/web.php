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
    return redirect('login');
});

//oute::view('/login', "auth.login")->name('login');
Route::get('/login', 'Auth\LoginController@isLogged')->name('login');
Route::post('/authentication', 'Auth\LoginController@authentication')->name('authentication');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group( [ 'middleware' => 'auth'], function()
{
        Route::view('/home', 'home')->name('home');   
        Route::view('/equipamentos', 'service.equipament')->name('equipament');
});

Route::resource('equipament', 'EquipamentController')->middleware('auth');