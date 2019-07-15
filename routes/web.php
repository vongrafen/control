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
        Route::view('/equipamentos', 'equip.register')->name('equipament');
        Route::get('autocomplete', 'EquipamentController@autocomplete')->name('autocomplete');
        Route::post('/equipamentos', 'EquipamentController@create')->name('cadastrar');
        Route::get('/index', 'EquipamentController@index')->name('index');
        Route::any('/equipamentos/{id}/editar', 'EquipamentController@edit')->name('editEquip');
        Route::post('/equipamentos/{id}/update', 'EquipamentController@update')->name('updateEquip');

        Route::view('/departamentos/index', 'departament.index')->name('departamentIndex');
        Route::view('/departamentos', 'departament.register')->name('departament');
        Route::post('/departamentos', 'DepartamentController@create')->name('registerDepartament');
        Route::get('/departamentos', 'DepartamentController@index')->name('showDepartament');

        //Route::view('/manutencao/index', 'maintence.index')->name('maintence');
        Route::get('/manutencao/index', 'MaintenceController@index')->name('maintenceIndex');


        
});