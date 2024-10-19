<?php


namespace App\Db;

use App\Models\Book;
use PDO;

class Connection
{
    public function __construct() {
        echo "OK";
    }

    public  function listBooks(?string $search = '')
    {
        $db = new \PDO('sqlite:database.sqlite');

        $sql = $db->prepare("SELECT * FROM books WHERE user_id = 2 AND title LIKE :search");
        $sql->setFetchMode(PDO::FETCH_CLASS, Book::class);
        $sql->bindValue(':search', "%$search%");
        $sql->execute();

       return  $sql->fetchAll();


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