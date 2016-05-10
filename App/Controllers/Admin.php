<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.05.2016
 * Time: 14:50
 */

namespace App\Controllers;
use App\Models\News;

class Admin extends Base_Admin
{

    protected function beforeAction()
    {
        $this->title = 'Admin: ';
    }

    protected function action_index()
    {
        $this->title .= 'список новостей';
        $news  = News::findall();
        $this->content = $this->template(__DIR__ . '/../templates/admin/admin.php', array('news' => $news));
    }

    protected function action_edit()
    {

        $url = $_SERVER['REQUEST_URI'];
        $info = explode('/', $url);
        $params = array();


        foreach ($info as $v)
        {
            if ($v != '')
                $params[] = $v;
        }


        if(isset($params[2])){
            $id = $params[2];
            $obj = $this->view->news = \App\Models\News::findById($id);

            if(isset($_POST['edit'])){
                $obj->title = $_POST['title'];
                $obj->content = $_POST['content'];
                $obj->author = $_POST['author'];
                $obj->save($id);
                header('Location: /admin');
            }

        }



        $this->view->display(__DIR__ . '/../templates/header.php');
        $this->view->display(__DIR__ . '/../templates/admin/edit.php');
        $this->view->display(__DIR__ . '/../templates/footer.php');
    }

    protected function action_add()
    {

        if(isset($_POST['add'])){
            $obj = new News();
            $obj->title = $_POST['title'];
            $obj->content = $_POST['content'];
            $obj->author = $_POST['author'];
            $obj->save();
            header('Location: /admin');
        }

        $this->view->display(__DIR__ . '/../templates/header.php');
        $this->view->display(__DIR__ . '/../templates/admin/add.php');
        $this->view->display(__DIR__ . '/../templates/footer.php');
    }


    protected function action_delete(){

        $url = $_SERVER['REQUEST_URI'];
        $info = explode('/', $url);
        $params = array();


        foreach ($info as $v)
        {
            if ($v != '')
                $params[] = $v;
        }



        if(isset($params[2])){
            $id = $params[2];

            $where = "id = {$id}";
            $item = new News();
            $item->delete($where);
            header('Location: /admin');
        }
    }
}