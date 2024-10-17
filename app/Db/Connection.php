<?php


namespace App\Db;
class Connection
{
    public static function listBooks()
    {
        $db = new \PDO('sqlite:database.sqlite');

        $query = $db->query("SELECT * FROM books");

        return $query->fetchAll();
    }
}