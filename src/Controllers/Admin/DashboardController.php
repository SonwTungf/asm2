<?php

namespace Asm\Controllers\Admin;

use Asm\Commons\Controller;
use Asm\Models\Post;

class DashboardController extends Controller
{
	protected Post $post;

	public function __construct()
	{
		$this->post = new Post();
	}

	public function index()
	{

		$data = [
			'title' => 'Dashboard',
			'data' => 'data',
			'posts' => $this->post->getAll('*')
		];
		return $this->renderAdmin('dashboard', $data);
	}
}