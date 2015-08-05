<?php

namespace App\Services\Admin\Http\Controllers;

use Flash;
use Carbon\Carbon;
use PragmaRX\Sdk\Core\Controller;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingTag;
use PragmaRX\Sdk\Services\Clipping\Http\Requests\ClippingStore;
use PragmaRX\Sdk\Services\Clipping\Commands\AddClipping as AddClippingCommand;
use PragmaRX\Sdk\Services\Clipping\Data\Repositories\Clipping as ClippingRepository;
use PragmaRX\Sdk\Services\Tags\Data\Entities\Tag;

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
		$tags = Tag::orderBy('name')->get()->lists('name');

		return
			view('admin.clipping.create')
				->with('today_date', Carbon::now()->format('d-m-Y'))
				->with('tags', $tags);
	}

	public function store(ClippingStore $request)
	{
		$this->execute(AddClippingCommand::class, $request->all());

		Flash::message(t('paragraphs.article-was-added'));

		return redirect()->route('admin.clipping.create');
	}

	public function storeValidate(ClippingStore $request)
	{
		return [];
	}
}
