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

Route::get('/', 'PartnersController@index');

Route::get('/fashions' , 'FashionsController@index')->name('fashions.index');
Route::post('/fashions/store','FashionsController@store')->name('imagen');

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/dados_demograficos', function () {
    return view('dados_demo');
});

Route::get('/pontos_turisticos', function () {
    return view('pontos_tur');
});

Route::get('/quem_somos', function () {
    return view('quem_somos');
});
//
//
Route::get('/categorias', function () {
    return view('categoria_create');
});
Route::post('/categories/create','CategoriesController@store')->name('create_categoria');
//
//
Route::get('/parceiro_create','PartnersController@create');

Route::post('/parceiro/create','PartnersController@store')->name('create_parceiro');

Route::get('/parceiro_index', 'PartnersController@index');
