<?php

namespace Asm\Controllers\Admin;

use Asm\Commons\Controller;
use Asm\Commons\Helper;
use Asm\Models\Post;

class PostController extends Controller
{
	protected Post $post;
	private string $folder = 'posts.';

	public function __construct()
	{
		$this->post = new Post();
	}

	public function index()
	{
		Helper::debug($this->post->getAll('*'));
		$data = [

		];
		return $this->renderAdmin($this->folder . __FUNCTION__);
	}

	public function create()
	{
		return $this->renderAdmin($this->folder . __FUNCTION__);
	}


}