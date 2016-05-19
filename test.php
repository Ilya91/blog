<?php
require __DIR__ . '/autoload.php';
$a = new \App\Collection();
$a[] = 1;
$a[1] = 11;
var_dump($a);
echo $a[1];