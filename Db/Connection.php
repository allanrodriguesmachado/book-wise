<?php

namespace Db;

class Connection
{
    public static function db()
    {
        $db = new \PDO('sqlite:database.sqlite');

        $query = $db->query("SELECT * FROM books");

        return $query->fetchAll();
    }
}