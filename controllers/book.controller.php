<?php

$id = $_REQUEST['id'];
$listBook = $lists->listBook($id);



// $filterBook = array_filter($books, fn ($item) =>  $item->id == $id);

// $listBook = array_pop($filterBook);

$view = 'book';

view('book', [
    'listBook' => $listBook,
]);

//require 'views/template/app.php';
