<?php

/**
 * PDO Database Class
 * Connect to database
 * Create Pepared Statement
 * Bind Values
 * Return rows and results
 */

namespace App\Libraries;

use PDO;
use PDOException;

class Database
{
    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $db;
    private $stmt;
    private $error;

    public function __construct()
    {
        //Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => 'true',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        //Create pdo instance
        try {
            $this->db = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    // Prepare statement with query
    public function query($sql)
    {
        $this->stmt = $this->db->prepare($sql);
    }

    // Bind Values
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;

                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    //execute the prepare statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    //get result set as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //Get single record as object
    public function result()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

}
