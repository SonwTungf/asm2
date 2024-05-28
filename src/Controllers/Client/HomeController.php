<?php

namespace Asm\Controllers\Client;

use Asm\Commons\Controller;

class HomeController extends Controller
{
	public function index()
	{
		return $this->renderClient('home');
	}
}