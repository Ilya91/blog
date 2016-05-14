<?php

/**
 * App\Models\User => ./App/Models/User.php
 */
function my_app_autoload($class)
{
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        include $file;
    }
}

spl_autoload_register('my_app_autoload');
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace(['\\', 'App'], ['/', 'lib'], $class) . '.php';
    if (file_exists($file)) {
        include $file;
    }
});