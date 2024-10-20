<?php

namespace App\Db;

use App\Models\Book;
use PDO;

class Connection
{
    private PDO $db;
    public function __construct(array $config) {
        $stringConnection = $config['driver'] . ':' . $config['connection'];
        $this->db = new PDO($stringConnection);
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