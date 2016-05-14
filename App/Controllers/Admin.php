<?php

namespace App\Controllers;

use App\Models\News;

class Admin extends Base_Admin
{

    protected function beforeAction()
    {
        $this->title = 'Admin: ';
    }

    protected function actionIndex()
    {
        $this->title .= 'список новостей';
        $news = News::findall();
        $this->content = $this->template(__DIR__ . '/../templates/admin/admin.php', array('news' => $news));
    }

    protected function actionEdit()
    {

        $this->title .= 'редактирование статьи';

        if (isset($this->params[2])) {
            $id = $this->params[2];
            $news = News::findById($id);

            if (isset($_POST['edit'])) {
                $news->title = $_POST['title'];
                $news->content = $_POST['content'];
                $news->author = $_POST['author'];
                $news->save($id);
                header('Location: /admin');
            }

        }
        $this->content = $this->template(__DIR__ . '/../templates/admin/edit.php', array('news' => $news));
    }

    protected function actionAdd()
    {
        $this->title .= 'добавить новую статью';

        if (isset($_POST['add'])) {
            $obj = new News();
            $obj->title = $_POST['title'];
            $obj->content = $_POST['content'];
            $obj->author = $_POST['author'];
            $obj->save();
            header('Location: /admin');
        }
        $this->content = $this->template(__DIR__ . '/../templates/admin/add.php');
    }


    protected function actionDelete()
    {

        if (isset($this->params[2])) {
            $id = $this->params[2];

            $where = "id = {$id}";
            $item = new News();
            $item->delete($where);
            header('Location: /admin');
        }
    }
}