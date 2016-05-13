<?php

namespace App\Controllers;

abstract class Controller
{
    protected $params;

    protected abstract function render();

    protected abstract function beforeAction();

    /**
     * @param $action
     * @param $params
     */
    public function action($action, $params)
    {
        $this->params = $params;
        $this->beforeAction();
        $this->$action();
        $this->render();
    }


    /**
     * @param $template string Путь к шаблону
     * @return string
     */
    protected function template($template, $vars = array()){

        ob_start();
        foreach ($vars as $prop => $value) {
            $$prop = $value;
        }
        include "$template";
        $content = ob_get_contents();
        ob_get_clean();
        return $content;
    }


    public function __call($name, $params){
        echo 'this method nod found';
    }

}