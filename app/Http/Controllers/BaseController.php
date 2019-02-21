<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BaseController extends Controller
{
	public function __construct()
	{
		$this->share();
	}

  	private function share()
	{
		$url = request()->url();
		view()->share('url', $url);
	}
}
