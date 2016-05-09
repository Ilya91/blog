<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2016
 * Time: 21:51
 */

namespace App\Controllers;
use App\View;

class Article extends Controller
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


    protected function actionArticle()
    {
        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $this->view->news = \App\Models\News::findById($id);
        }
        $this->view->display(__DIR__ . '/../templates/header.php');
        $this->view->display(__DIR__ . '/../templates/article.php');
        $this->view->display(__DIR__ . '/../templates/footer.php');
    }
}