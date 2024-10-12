<?php
require_once __DIR__ . "/../vendor/autoload.php";

require '../data.php';

$uri = $_SERVER['REQUEST_URI'];

$view = str_replace('/','', $uri);

require_once '../views/template/app.php';
