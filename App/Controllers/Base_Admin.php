<?php

namespace App\Controllers;


abstract class Base_Admin extends Controller
{


    protected $title;		// заголовок страницы
    protected $content;		// содержание страницы


    public function render(){
        $vars = array('content' => $this->content, 'title' => $this->title);
        $page = $this->template(__DIR__ . '/../templates/main.php', $vars);
        echo $page;
    }

}