<?php

if (!function_exists('view')) {
    function view(string $view, array $data) {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        require "views/template/app.php";
    }
}