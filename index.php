<?php
require __DIR__ . '/autoload.php';

$controller = new \App\Controllers\News();
$action = $_GET['action'] ?: 'Index';
$controller->action($action);


