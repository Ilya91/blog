<?php

namespace App;

use App\Controllers\News;
use App\Controllers\Admin;

class Rout
{
    private $controller;
    private $action;
    private $params;

    public function __construct($url)
    {
        $info = explode('/', $url);
        $this->params = array();


        foreach ($info as $v)
        {
            if ($v != '')
                $this->params[] = $v;
        }

        $this->action = 'action_';
        $this->action .= (isset($this->params[1]) ? $this->params[1] : 'index');

        switch($this->params[0]){
            case 'news':
                $this->controller = new News();
                break;
            case 'admin':
                $this->controller = new Admin();
                break;
            case null:
                $this->controller = new News();
                $this->action = 'action_index';
                break;
            default:
                $this->controller = new News();
                $this->action = 'action_index';
                break;
        }
    }

    public function Request()
    {
        $c = $this->controller;
        $c->action($this->action, $this->params);
    }
}