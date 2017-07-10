<?php

function page_not_found() {
    $page_not_found = 404;
    require 'template/main-page.php';
}

function say_hello()
{
    $name = 'PHP';
    require 'templates/hello.php';
}

function show_numbers(int $n)
{
    $r = [];
    if ($n > 0) {
        $r = range(1, $n);
    }
    require 'templates/numbers.php';
}