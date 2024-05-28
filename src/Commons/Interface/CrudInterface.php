<?php

namespace Asm\Commons\Interface;

interface CrudInterface
{
	public function getAll($data);
	public function getOne($id);
	public function updateOne($id, $data);
	public function deleteOne($id);
}