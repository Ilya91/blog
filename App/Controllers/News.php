<?php

namespace App\Controllers;

use \App\Models\News;

class News extends Base
{
    public function beforeAction()
    {
    }


    protected function actionIndex()
    {
        $this->title = 'Список новостей';
        $news  = News::findLastNews();
        $this->content = $this->template(__DIR__ . '/../templates/index.php', array('news' => $news));
    }

    protected function actionArticle()
    {

        if(isset($this->params[2])){
            $id = $this->params[2];
            $article = News::findById($id);
            $articleArr = (array)$article;
            $this->title = $articleArr['title'];

        }
        $this->content = $this->template(__DIR__ . '/../templates/article.php', array('article' => $article));
    }
}