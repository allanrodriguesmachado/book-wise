<?php

$books = $lists->listBooks();

view('index',
    ['books' => $books]
);
