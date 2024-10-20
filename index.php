<?php

use App\Db\Connection;

require 'vendor/autoload.php';

$config = require 'config.php';

$lists = new Connection($config['database']);

require "routes.php";

