<?php

namespace App\Core;

class DbConnection {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "root";
    private $dbName = "freshshop";

    protected function dbconnect() {
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
        $db = new \PDO($dsn, $this->user, $this->pwd);
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $db;
    }

}