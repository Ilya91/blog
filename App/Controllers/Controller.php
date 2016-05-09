<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2016
 * Time: 21:51
 */

namespace App\Controllers;

abstract class Controller
{
    protected $params;

    public function action($action)
    {
        $methodName = $action;
        $this->beforeAction();
        return $this->$methodName();
    }


    /**
     * @param $template string Путь к шаблону
     * @return string
     */
    protected function render($template){

        ob_start();
        foreach ($this->data as $prop => $value) {
            $$prop = $value;
        }
        include "$template";
        $content = ob_get_contents();
        ob_get_clean();
        return $content;
    }


    /**
     * @param $template
     * string Путь к шаблону
     */
    protected function display($template){
        echo $this->render($template);
    }


}