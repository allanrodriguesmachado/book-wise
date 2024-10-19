<?php

$search = $_REQUEST['search'] ?? '';

$books = $lists->query(
    'SELECT * FROM books WHERE user_id AND title LIKE :filter',
    \App\Models\Book::class,
    ["filter" => "%$search%"
]);


view('index', compact('books'));
