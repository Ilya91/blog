<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

$db = new \App\Db;
$res= $db->execute("SELECT * FROM users WHERE id = 4");
var_dump($res);
