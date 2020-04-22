<?php


class GuestBook
{
    public function __construct()
    {
        $serverName = "my-mysql-db:3306";
        $username = "root";
        $password = "example";
        $dbName = "example";

        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

