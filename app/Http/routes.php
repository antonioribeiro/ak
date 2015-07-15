<?php

Route::group(['namespace' => 'App\Services\Home\Http\Controllers'], function()
{
	Route::get('/', ['uses' => 'Home@index']);
});


