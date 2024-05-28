<?php
/** @var TYPE_NAME $router */

use Asm\Controllers\Admin\CategoryController;
use Asm\Controllers\Admin\DashboardController;
use Asm\Controllers\Admin\PostController;
use Asm\Models\Category;

$router->mount('/admin', function () use ($router) {
	$router->get('/', DashboardController::class . '@index');

	// Route Posts
	$router->mount('/posts', function () use ($router) {
		$router->get('/', PostController::class . '@index');
		$router->get('/create', PostController::class . '@create');
	});

	$router->mount('/categories', function () use ($router) {
		$router->get('/', CategoryController::class . '@index');

		$router->get('/create', CategoryController::class . '@create');
		$router->post('/create', CategoryController::class . '@handleCreate');


		$router->get('/view/{id}', function ($id) {
			echo "View ID: " . $id;
		});
		$router->get('/delete/{id}', function ($id) {
			echo "delete ID: " . $id;
		});
		$router->get('/edit/{id}', function ($id) {
			echo "edit ID: " . $id;
		});
		$router->get('/{id}', CategoryController::class . '@index');
	});


});