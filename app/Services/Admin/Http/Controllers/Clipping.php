<?php

namespace App\Services\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use PragmaRX\Sdk\Services\Clipping\Data\Repositories\Clipping as ClippingRepository;

class Clipping extends Controller
{
	/**
	 * @var ClippingRepository
	 */
	private $clippingRepository;

	public function __construct(ClippingRepository $clippingRepository)
	{
		$this->clippingRepository = $clippingRepository;
	}

	public function create()
	{
		return view('admin.clipping.create');
	}
}
