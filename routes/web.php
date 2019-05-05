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
    return view('layout');
});
Route::delete('/artistes/{id}', 'ArtistController@destroy');
Route::delete('/concerts/{id}', 'ConcertController@destroy');
Route::resource('artistes','ArtistController');
Route::resource('concerts','ConcertController');
Route::resource('category','CategoryController');
Route::resource('dates','DateController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/panier', 'PanierController@index')->name('shop.panier');

//Route::group(['middleware'=>['auth:api']],function (){

//});
