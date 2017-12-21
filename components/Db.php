<?php
namespace components;

use pdo;
use traits\SingletoneTrait;

class Db
{
    use SingletoneTrait;

    private static $pdo;
    public $host = '';
    public $dbname = '';
    public $userame = '';
    public $password = '';

    public $options = [];

    public function init()
    {
        try{
            self::$pdo = new PDO("mysql:host=". $this->host .";dbname=" . $this->dbname,
                $this->userame,
                $this->password);
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        return true;

    }

    public function getConnection() {
        return self::$pdo;
    }
}