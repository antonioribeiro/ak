<?php

namespace App\Services\Home\Http\Controllers;

use App\Http\Controllers\Controller;

class Home extends Controller
{
	public function index()
	{
		return redirect('clipping');
	}
}
