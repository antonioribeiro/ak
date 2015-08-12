<?php

Route::group(['prefix' => 'api/v1'], function()
{
	Route::group(['namespace' => 'App\Services\Api\Http\Controllers'], function()
	{
		Route::group(['prefix' => 'markdown'], function()
		{
			Route::post('tohtml', ['as' => 'api.markdown.tohtml', 'uses' => 'Markdown@toHtml']);
		});

		Route::group(['prefix' => 'clipping'], function()
		{
			Route::post('makefilename', ['as' => 'api.clipping.makefilename', 'uses' => 'Clipping@makefilename']);
		});

		Route::group(['prefix' => 'select'], function()
		{
			Route::get('allFrom/{model?}/{first?}/{last?}', ['as' => 'api.select.allFrom', 'uses' => 'Select@allFrom']);
		});
	});
});

