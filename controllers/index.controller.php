<?php

$search = $_REQUEST['search'] ?? '';

$books = $lists->listBooks($search);

view('index',
    ['books' => $books]
);
