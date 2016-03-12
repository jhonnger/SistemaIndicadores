<?php



Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('logout',['as' => 'logout', 'uses' => 'AuthController@logout']);


Route::get('admin',['as' => 'loginAdm', 'uses' => 'AdminController@index']);

Route::post('admin/login', ['as' => 'loginAdm', 'uses' => 'AuthController@loginAdm']);
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::group(['before' => 'admin'], function () {
	// put here your routes protected
	Route::get('test',['uses' => 'AdminController@test']);
});
