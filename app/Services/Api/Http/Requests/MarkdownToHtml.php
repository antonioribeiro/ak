<?php

namespace App\Services\Api\Http\Requests;

use PragmaRX\Sdk\Core\Validation\FormRequest;

class MarkdownToHtml extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'markdown' => 'required',
		];
	}

}
