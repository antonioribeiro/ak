<?php

Route::get('/', function()
{
	return view('comingsoon');
});

//Route::group(['middleware' => 'auth'], function()
//{
//	Route::group(['namespace' => 'App\Services\Home\Http\Controllers'], function()
//	{
//		Route::get('/', ['as' => 'home', 'uses' => 'Home@index']);
//
//		Route::get('admin', ['as' => 'admin.home', 'uses' => 'Home@index']);
//	});
//});
//
