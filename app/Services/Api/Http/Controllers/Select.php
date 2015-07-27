<?php

namespace App\Services\Api\Http\Controllers;

use App\Http\Controllers\Controller;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingCategory;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingLocality;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingVehicle;

class Select extends Controller
{
	public function allFrom($model = null)
	{
		return $this->result($this->getAllFromModel($model));
	}

	private function result($result)
	{
		return [
			'items' => $result
		];
	}

	private function getAllFromModel($model)
	{
		$model = $this->selectModel($model);

		return with(new $model)->all()->lists('name', 'id')->toArray();
	}

	private function selectModel($model)
	{
		if ($model == 'locality')
		{
			return ClippingLocality::class;
		}

		if ($model == 'vehicle')
		{
			return ClippingVehicle::class;
		}

		if ($model == 'editorial')
		{
			return ClippingCategory::class;
		}

		return null;
	}
}
