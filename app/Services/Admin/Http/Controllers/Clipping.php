<?php

namespace App\Services\Admin\Http\Controllers;

use PragmaRX\Sdk\Core\Controller;
use App\Services\Admin\Http\Requests\ClippingStore;
use PragmaRX\Sdk\Services\Clipping\Commands\AddClipping as AddClippingCommand;
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

	public function store(ClippingStore $request)
	{
		$this->execute(AddClippingCommand::class, $request->all());

		Flash::message(t('paragraphs.group-deleted'));

		return Redirect::back();
	}

	public function storeValidate(ClippingStore $request)
	{
		return [];
	}
}
