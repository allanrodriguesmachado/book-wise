<?php


namespace App\Db;

use App\Models\Book;
use PDO;

class Connection
{
    public function __construct() {
        echo "OK";
    }

    public  function listBooks()
    {
        $db = new \PDO('sqlite:database.sqlite');

        $query = $db->query("SELECT * FROM books");

        $data =  $query->fetchAll();

        $arrItems = [];

        foreach ($data as $item) {
            $book = new Book;

            $book->id = $item["id"];
            $book->title = $item["title"];
            $book->description = $item["description"];
            $book->author = $item["author"];

            $arrItems[] = $book;
        }

        return $arrItems;

    }

    public function listBook(int $id) {
        $db = new \PDO('sqlite:database.sqlite');

        $query = $db->query(sprintf("SELECT * FROM books WHERE id = %s", $id));

        $data =  $query->fetchObject();
        // dd($data);

        // $arrItems = [];

        // foreach ($data as $item) {

        //     $book = new Book;

        //     $book->id = $item["id"];
        //     $book->title = $item["title"];
        //     $book->description = $item["description"];
        //     $book->author = $item["author"];


        //     $arrItems[] = $book;
        // }
        return $data;
    }
}