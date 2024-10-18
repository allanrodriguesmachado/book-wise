<?php

use App\Db\Connection;

require 'vendor/autoload.php';

$lists = new Connection();

require "routes.php";

