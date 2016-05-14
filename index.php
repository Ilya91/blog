<?php
require __DIR__ . '/autoload.php';

try {
    $rout = new \App\Rout($_SERVER['REQUEST_URI']);
    $rout->Request();
} catch (\App\Exceptions\Core $e) {
    echo 'Возникло исключение: ' . $e->getMessage();
} catch (\App\Exceptions\Db $e) {
    echo 'Что-то не так с базой: ' . $e->getMessage();
}