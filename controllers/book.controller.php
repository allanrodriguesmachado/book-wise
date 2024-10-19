<?php

use App\Models\Book;

$id = $_REQUEST['id'];

$listBook = $lists->query(
    "SELECT * FROM books WHERE id = :id",
    Book::class,
    [':id' => $id])->fetch();

view('book', compact('listBook'));

