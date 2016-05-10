<?php
require __DIR__ . '/autoload.php';
$rout = new \App\Rout($_SERVER['REQUEST_URI']);
$rout->Request();