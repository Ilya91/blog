<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.05.2016
 * Time: 22:35
 */

namespace App\Controllers;


abstract class Base extends Controller
{

    protected $title;        // заголовок страницы
    protected $content;        // содержание страницы


    public function render()
    {
        $vars = array('content' => $this->content, 'title' => $this->title);
        $page = $this->template(__DIR__ . '/../templates/main.php', $vars);
        echo $page;
    }
}