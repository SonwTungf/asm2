<?php

namespace Asm\Commons;

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;

class Model
{
	protected $connect;
	protected $queryBuilder;
	protected string $tableName;

	public function __construct()
	{
		$connectionParams = [
			'dbname' => $_ENV['DB_NAME'],
			'user' => $_ENV['DB_USERNAME'],
			'password' => $_ENV['DB_PASSWORD'],
			'host' => $_ENV['DB_HOST'],
			'port' => $_ENV['DB_PORT'],
			'driver' => $_ENV['DB_DRIVER'],
		];
		$this->connect = DriverManager::getConnection($connectionParams);
		$this->queryBuilder = $this->connect->createQueryBuilder();
	}

	public function getAll(...$columns)
	{
		try {
			return $this->queryBuilder
				->select(...$columns)
				->from($this->tableName)
				->fetchAllAssociative();
		} catch (Exception $e) {
			die("Err" . $e->getMessage());
		}
	}

	public function getOne($id)
	{
		try {
			return $this->queryBuilder
				->select('*')
				->from($this->tableName)
				->where($id)
				->fetchAssociative();
		} catch (Exception $e) {
			die("Err" . $e->getMessage());
		}
	}

	public function __destruct()
	{
		$this->connect = null;
	}
}