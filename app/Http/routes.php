<?php

use PragmaRX\Sdk\Services\Clipping\Data\Entities\Clipping;

Route::get('/', function()
{
	return view('comingsoon');
});

Route::get('beta', function()
{
	return redirect('clipping');
});

Route::get('seed', function()
{
	Artisan::call('db:seed');
});

Route::group(['middleware' => 'auth', 'prefix' => 'beta'], function()
{
	Route::group(['namespace' => 'App\Services\Home\Http\Controllers'], function()
	{
		Route::get('/', ['as' => 'home', 'uses' => 'Home@index']);
	});

	Route::group(['namespace' => 'App\Services\Admin\Http\Controllers', 'prefix' => 'admin'], function()
	{
		Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin@index']);

		Route::group(['prefix' => 'clipping'], function()
		{
			Route::get('create', ['as' => 'admin.clipping.create', 'uses' => 'Clipping@create']);

			Route::post('store', ['as' => 'admin.clipping.store', 'uses' => 'Clipping@store']);

			Route::get('edit', ['as' => 'admin.clipping.edit', 'uses' => 'Clipping@edit']);
			Route::get('delete', ['as' => 'admin.clipping.delete', 'uses' => 'Clipping@delete']);
		});
	});
});
