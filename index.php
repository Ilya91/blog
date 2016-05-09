<?php
require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];

$info = explode('/', $url);
$params = array();


foreach ($info as $v)
{
    if ($v != '')
        $params[] = $v;
}

$action = 'action_';
$action .= (isset($params[1]) ? $params[1] : 'index');

switch($params[0]){
    case 'news':
        $controller = new \App\Controllers\News();
        break;
    case 'admin':
        $controller = new \App\Controllers\Admin();
        break;
    case null:
        $controller = new \App\Controllers\News();
        $action = 'action_index';
        break;
    default:
        $controller = new \App\Controllers\News();
        $action = 'action_index';
        break;
}
//var_dump($action);
//var_dump($_SERVER['REQUEST_URI']);

$controller->action($action);


