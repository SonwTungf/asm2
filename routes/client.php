<?php
/** @var TYPE_NAME $router */

use Asm\Controllers\Client\HomeController;

$router->get('/', HomeController::class . '@index');

$router->get('/posts', function ($id = 1){
	echo "Posts . Page = " . $id;
});

$router->get('/posts/{id}', function ($id){
	echo "Posts Page . Page = " . $id;
});
