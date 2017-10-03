<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('products', 'ProductController');

Route::get('products/find/advancefind', 'ProductController@advancefind');

//Route::post('product','ProductController@index');
Route::resource('/','HomeController');
Route::get('/personal/{id}/edit','HomeController@edit');
Route::get('/personal/create','HomeController@create');
Route::post('/personal/create','HomeController@store');
Route::get('/personal/{id}/reset','HomeController@reset');
Route::post('/personal/{id}/reset','HomeController@passwordupdate');

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/details', function () {
    return view('details');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//update information account

//Route::resource('admin','AdminProductController');
//Route::get('admin/{id}/delete','AdminProductController@destroy');

//middleware group admin
Route::group(['middleware' => 'admin'], function () {
Route::resource('admin','AdminProductController');
Route::get('admin/{id}/delete','AdminProductController@destroy');
Route::get('admin/account/create','AdminProductController@createAccount');
Route::post('admin/account/list','AdminProductController@accountStore');
Route::get('admin/account/list','AdminProductController@indexAccount');
Route::get('admin/account/{id}/delete','AdminProductController@accountDelete');
Route::get('admin/account/{id}/edit','AdminProductController@accountEdit');
Route::post('admin/account/{id}/edit','AdminProductController@accountUpdate');
Route::get('admin/account/{id}/info','AdminProductController@infoEdit');
Route::post('admin/account/{id}/info','AdminProductController@infoUpdate');

Route::get('admin/personal/create','AdminProductController@personalCreate');
Route::post('admin/personal/create','AdminProductController@personalStore');
});

Route::get('products/type/{id}','typemarchandiseController@index');
//Route::any('{all?}','ProductController@index')->where('all','(.*)');

