<?php

use App\Db\Connection;

require 'vendor/autoload.php';

$books = Connection::listBooks();

require "routes.php";

