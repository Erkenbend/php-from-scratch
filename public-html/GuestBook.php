<?php

include_once "GuestBookEntry.php";
class GuestBook
{
    private static $con;

    /**
     * @return PDO
     */
    private static function getConnection()
    {
        if (static::$con === null) {
            $serverName = "my-mysql-db:3306";
            $username = "root";
            $password = "example";
            $dbName = "example";

            try {
                static::$con = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
                // set the PDO error mode to exception
                static::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return static::$con;


    }

    /**
     * @param GuestBookEntry $entry
     * @return bool
     */
    public static function addEntry($entry) {
        $conn = self::getConnection();
        $sql = "Insert into GuestBookEntry(firstName,lastName,content) VALUES (?,?,?)";
        return $conn->prepare($sql)->execute([$entry->getFirstName(),$entry->getLastName(),$entry->getContent()]);
    }

    /**
     * @return GuestBookEntry[]
     */
    public static function getAllEntries() {
        $conn = self::getConnection();
        $sql = "Select * From GuestBookEntry";
        $rawEntries =  $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $results = [];
        foreach ($rawEntries as $entry) {
            $results[] = new GuestBookEntry($entry['firstName'], $entry['lastName'], $entry['content']);
        }
        return $results;
    }

}

