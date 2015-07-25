<?php

namespace App\Services\Api\Http\Controllers;

use App\Http\Controllers\Controller;

class Select extends Controller
{
	public function allFrom($model = null, $first = null, $last = null)
	{
		return $this->result(
			[
				1 => 'a',
				2 => 'b'
			],
            $first,
            $last
		);
	}

	private function result($result, $first, $last)
	{
		if ($first)
		{
			$result = array_merge([0 => $first], $result);
		}

		if ($last)
		{
			$result[9999] = $last;
		}

		return [
			'items' => $result
		];
	}
}
