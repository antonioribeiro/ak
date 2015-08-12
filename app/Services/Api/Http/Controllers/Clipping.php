<?php

namespace App\Services\Api\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Clipping extends Controller
{
	public function makefilename(Request $request)
	{
		$date = Carbon::createFromFormat('d/m/Y', $request['published_at']);

		$date = $date->format('Y-m-d');

		$filename = sprintf(
			'%s-[%s]-%s.png',
			$date,
			implode(',',$request['tags']),
			$this->createSlug($request['heading'])
		);

		return ['filename' => $filename];
	}

	private function createSlug($heading)
	{
		$slug = Str::slug($heading);

		return remove_accents($slug);
	}
}

// data-[tags]-titulo.png
