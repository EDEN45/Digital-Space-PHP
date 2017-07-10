<?php

require_once 'controller.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $uri) {
    //$n = $_GET['n'] ?? 0;

} elseif('/hello' === $uri) {

} else {
    page_not_found();
    
}
