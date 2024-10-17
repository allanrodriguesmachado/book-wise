<?php

view('index',
    ['books' => $books]
);


$db = new PDO('sqlite:database.sqlite');

$query = $db->query("SELECT * FROM books");

dd($query->fetchAll());

//require 'views/template/app.php';