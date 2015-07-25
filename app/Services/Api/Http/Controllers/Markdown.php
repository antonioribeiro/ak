<?php

namespace App\Services\Api\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Api\Http\Requests\MarkdownToHtml;
use PragmaRX\Sdk\Services\Markdown\Service\Markdown as MarkdownService;

class Markdown extends Controller
{
	/**
	 * @var \PragmaRX\Sdk\Services\Markdown\Service\Markdown
	 */
	private $markdownService;

	public function __construct(MarkdownService $markdownService)
	{
		$this->markdownService = $markdownService;
	}

	public function toHtml(MarkdownToHtml $request)
	{
		$markdown = $request->get('markdown');

		return [
			'markdown' => $markdown,
			'html' => $this->markdownService->toHtml($markdown)
		];
	}
}
