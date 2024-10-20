<?php

if (!function_exists('view')) {
    function view(string $view, array|object $data = null) {
        if ($data === null) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }

        require "views/template/app.php";
    }
}