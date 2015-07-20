<?php

use PragmaRX\Sdk\Services\Clipping\Data\Entities\Clipping;

Route::get('/', function()
{
	return view('comingsoon');
});

Route::get('beta', function()
{

	// return redirect('clipping');
});

Route::get('seed', function()
{
	$clipping = Clipping::find('0c023755-0b8f-432f-80f8-1ec63506caf2');

	dd($clipping->tags->lists('name'));

	dd($clipping);
});

Route::group(['middleware' => 'auth', 'prefix' => 'beta'], function()
{
	Route::group(['namespace' => 'App\Services\Home\Http\Controllers'], function()
	{
		Route::get('/', ['as' => 'home', 'uses' => 'Home@index']);

		Route::get('admin', ['as' => 'admin.home', 'uses' => 'Home@index']);
	});
});
