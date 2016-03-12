<?php



Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('admin',['as' => 'loginAdm', 'uses' => 'AdminController@index']);

Route::post('admin', ['as' => 'loginAdm', 'uses' => 'AuthController@login']);

Route::group(['before' => 'admin'], function () {
	// put here your routes protected
	Route::get('test',['uses' => 'AdminController@test']);
});
