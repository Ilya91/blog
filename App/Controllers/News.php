<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2016
 * Time: 21:51
 */

namespace App\Controllers;
use App\View;

class News extends Controller
{

    protected $view;

    /**
     * News constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }


    protected function beforeAction()
    {
    }


    protected function action_index()
    {
        $this->view->display(__DIR__ . '/../templates/header.php');
        $this->view->news = \App\Models\News::findLastNews();
        $this->view->display(__DIR__ . '/../templates/index.php');
        $this->view->display(__DIR__ . '/../templates/footer.php');
    }

    protected function action_article()
    {
        $url = $_SERVER['REQUEST_URI'];
        $info = explode('/', $url);
        $params = array();


        foreach ($info as $v)
        {
            if ($v != '')
                $params[] = $v;
        }


        $this->view->display(__DIR__ . '/../templates/header.php');
        if(isset($params[2])){
            $id = $params[2];
            $this->view->news = \App\Models\News::findById($id);
        }
        $this->view->display(__DIR__ . '/../templates/article.php');
        $this->view->display(__DIR__ . '/../templates/footer.php');
    }
}