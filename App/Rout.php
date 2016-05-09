<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.05.2016
 * Time: 12:09
 */

namespace App;


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

        $this->action = 'action';
        $this->action .= (isset($this->params[1])) ? $this->params[1] : 'index';

        switch ($this->params[0])
        {
            case 'Article':
                $this->controller = 'Article';
                break;
            case null:
                $this->controller = 'News';
                $this->action = 'actionIndex';
                break;
            default:
                $this->controller = 'News';
                $this->action = 'actionIndex';
        }
    }
}