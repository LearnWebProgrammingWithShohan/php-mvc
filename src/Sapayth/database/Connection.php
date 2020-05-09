<?php

require_once 'config.php';

/**
 * The class responsible for database operations
 */
class Connection
{
	private static $dbInfo;
	private static $host = 'mysql:host=127.0.0.1';
	private static $dbname = 'db_php_mvc';
	private static $username = 'root';
	private static $password = '';
	private static $options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
	];
	
	// var_dump($config);

	public function __construct()
	{
		$this->database = $config['database'];
	}

	static function Make()
	{
		try {
			// return new Pdo("mysql:host=127.0.0.1;dbname=db_todo7", 'root', '');
			return new Pdo(
				self::$host.';dbname='.self::$dbname,
				self::$username,
				self::$password,
				self::$options
			);
		} catch (PDOException $e) {
			die('could not connect! ' . $e->getMessage());
		}
	}
}