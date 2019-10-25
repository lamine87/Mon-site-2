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

//Route::get('/', function () {
//    return view('page');
//
//});

Route::get('/','Shop\MainController@index')->name('home');

//Route::get('/piste/{id}','Shop\MediaController@piste')->name('piste');

//Route::get('/voir_artiste','Shop\MediaController@index')->name('voir_artiste');

Route::get('/voir/artiste/{id}','Shop\MainController@voirArtiste')->name('voir_artiste');

//Route::get('/piste_tag','Shop\MediaController@piste_tag')->name('piste_tag');




