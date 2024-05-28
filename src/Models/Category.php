<?php

namespace Asm\Models;

use Asm\Commons\Model;

class Category extends Model
{
	protected string $tableName = 'categories';
	public function findAllPagination($limit, $init_page)
	{
		try {
			$this->queryBuilder
				->select("*")
				->from("$this->tableName")
				->orderBy('id', 'DESC')
				->setFirstResult($init_page)
				->setMaxResults($limit);

			$statement = $this->connect->executeQuery($this->queryBuilder->getSQL(), $this->queryBuilder->getParameters());
			$productData = $statement->fetchAllAssociative();
			return $productData;
		} catch (\Exception $e) {
			debug(" Err: " . $e->getMessage());
		}
	}

	public function getTotalCount($limit)
	{
		try {
			$this->queryBuilder
				->select('COUNT(*)')
				->from("$this->tableName");

			$total = $this->connect->executeQuery($this->queryBuilder->getSQL(), $this->queryBuilder->getParameters())->fetchOne();
			return ceil($total / $limit);
		} catch (\Exception $e) {
			debug(' Err: ' . $e->getMessage());
		}
	}

	public function insert($data)
	{
		$this->queryBuilder
			->insert($this->tableName)
			->values(
				[
					'name' => '?'
				]
			)
			->setParameter(0, $data['name'])
			->executeQuery();
	}
}
