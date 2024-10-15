<?php
require '../data.php';

$id = $_REQUEST['id'];

$filterBook = array_filter($books, fn ($item) =>  $item['id'] == $id);

$listBook = array_pop($filterBook);

$view = 'book';

require 'views/template/app.php';
