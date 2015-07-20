<?php

namespace App\Services\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PragmaRX\Sdk\Services\Clipping\Data\Repositories\Clipping as ClippingRepository;

class Home extends Controller
{
	public function index(ClippingRepository $clippingRepository)
	{
		return
			view('home')
				->with('posts', $clippingRepository->paginated());
	}
}
