<?php

require 'vendor/autoload.php';

require 'data.php';

$view = 'index';

if ($uri = $_SERVER['PATH_INFO']) {
    $view = str_replace('/', '', $uri);
}

require "controllers/{$view}.controller.php";
