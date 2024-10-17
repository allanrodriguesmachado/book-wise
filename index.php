<?php

use App\Db\Connection;

require 'vendor/autoload.php';

//require 'data.php';
$books = Connection::listBooks();


require "routes.php";

