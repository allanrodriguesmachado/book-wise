<?php

namespace App\Db;

use App\Models\Book;
use PDO;

class Connection
{
    private PDO $db;
    public function __construct() {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function query(string $query, string $class, array $params) {
        $prepare = $this->db->prepare($query);

        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }

        $prepare->execute($params);

        return $prepare;
    }
}