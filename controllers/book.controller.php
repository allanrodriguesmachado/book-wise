<?php
require_once __DIR__ . "/../vendor/autoload.php";

require '../data.php';

$id = $_REQUEST['id'];

$filterBook = array_filter($books, fn($item) => $item['id'] == $id);

$listBook = array_pop($filterBook);

$view = 'livros';

