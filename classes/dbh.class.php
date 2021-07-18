<?php

class Dbh {

    //database private properties
    private $host = '127.0.0.1';
    private $user = 'root';
    private $pwd = 'root';
    private $dbName = 'oopphp16';

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }


}