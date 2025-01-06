<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=laracast";
        $username = "root";
        $password = "";
        
        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}