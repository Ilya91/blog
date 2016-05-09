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
         echo 'Counter';
    }


    protected function actionIndex()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $item = new \App\Models\News();
            $item->title = $_POST['title'];
            //$item->author = $_POST['author'];
            $item->content = $_POST['content'];
            $item->save();
            header('Location: index.php');
        }

        $this->view->display(__DIR__ . '/../templates/header.php');
        $this->view->news = \App\Models\News::findLastNews();
        $this->view->display(__DIR__ . '/../templates/index.php');
        $this->view->display(__DIR__ . '/../templates/footer.php');
    }
}