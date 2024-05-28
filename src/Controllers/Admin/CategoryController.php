<?php

namespace Asm\Controllers\Admin;

use Asm\Commons\Controller;
use Asm\Models\Category;
use Rakit\Validation\Validator;

class CategoryController extends Controller
{
	protected string $folder = 'categories.';
	protected Category $category;
	protected $validator;

	public function __construct()
	{
		$this->category = new Category();
		$this->validator = new Validator;
	}

	public function index($page = 1)
	{
		$limit = 1;
		$pagination = $this->handlePagination($page, $limit);
		$total_page = $this->category->getTotalCount($limit);
		$categoris = $this->category->findAllPagination(limit: "$limit", init_page: $pagination['initial_page']);

		$data = [
			'categori' => $categoris,
			'total_page' => $total_page,
			'page' => $page
		];
		return $this->renderAdmin($this->folder . __FUNCTION__, $data);
	}

	public function create()
	{
		return $this->renderAdmin($this->folder . __FUNCTION__);
	}

	public function handleCreate()
	{
		$this->validator->setMessages([
			'required' => 'cdmm nhap name vao',
			'email' => 'email sai',
			'min:4' => 'Vui long nhap name hon 4 ki tu'
			// etc
		]);
		$validation = $this->validator->make($_POST + $_FILES, [
			'name'                  => 'required|min:4',
		]);

		$validation->validate();

		if ($validation->fails()) {
			// handling errors
			$errors = $validation->errors()->firstOfAll();
			$_SESSION['errors'] = $errors;
			echo "<pre>";
			print_r($_SESSION['errors']);
			echo "</pre>";
			exit;
		} else {
			// validation passes
			$data = [
				'name' => $_POST['name']
			];
			$this->category->insert($data);
			header('location: ' . $_ENV['BASE_URL_ADMIN'] . 'categories');
		}

	}
}