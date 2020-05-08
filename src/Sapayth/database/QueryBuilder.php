<?php

/**
 * The class for queries
 */
class QueryBuilder
{
	protected $pdo;
	protected $allResults;
	
	function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	private function arrayToSqlValues(Array $values)
	{
		$valuesStr = '(';

		foreach ($values as $value)
		{
			$valuesStr .= is_string($value) ? '"' . $value . '",' : $value . ',';
		}

		$valuesStr = rtrim($valuesStr, ',');
		$valuesStr .= ')';

		return $valuesStr;
	}

	public function fetchAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		$this->allResults = $statement->fetchAll(PDO::FETCH_CLASS);

		return $this->allResults;
	}

	public function deleteItem($table, $deleteBy, $value)
	{
		$statement = $this->pdo->prepare("delete from {$table} where {$deleteBy} = {$value}");

		return $statement->execute();
	}

	public function insert($table, $columns, $values)
	{
		$columns = implode(',', $columns);
		$valuesStr = $this->arrayToSqlValues($values);

		$statement = $this->pdo->prepare("insert into {$table}({$columns}) values{$valuesStr}");

		return $statement->execute();
	}

	public function flushTable($table)
	{
		$statement = $this->pdo->prepare("truncate {$table}");

		return $statement->execute();
	}

	public function editItem($table, $columns, $values, $editBy, $editByValue)
	{
		$fields = '';

		if (count($columns) != count($values))
		{
			return new \Exception('Column and values length not matched!!!');
		}

		for ($i=0; $i < count($columns); $i++) {
			$fields .= $columns[$i] . '=';
			$fields .= is_string($values[$i]) ? '"' . $values[$i] . '",' : $values[$i] . ',';
		}

		$fields = rtrim($fields, ',');

		// return $fields;

		$statement = $this->pdo->prepare("update {$table} set {$fields} where {$editBy} = {$editByValue}");
		
		return $statement->execute();
	}
}