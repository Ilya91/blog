<?php

namespace App;


class View implements \Countable
{

    protected $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }


    /**
     * @param $template string Путь к шаблону
     */
    public function render($template){

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
     * @param $template string Путь к шаблону
     */
    public function display($template){
        echo $this->render($template);
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
       return count($this->data);
    }
}