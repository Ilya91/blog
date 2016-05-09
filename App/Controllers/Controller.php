<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2016
 * Time: 21:51
 */

namespace App\Controllers;

class Controller
{

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

}