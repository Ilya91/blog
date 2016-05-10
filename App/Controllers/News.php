<?php

namespace App\Controllers;

class News extends Base
{
    protected function beforeAction()
    {
    }


    protected function action_index()
    {
        $this->title = 'Список новостей';
        $news  = \App\Models\News::findLastNews();
        $this->content = $this->template(__DIR__ . '/../templates/index.php', array('news' => $news));
    }

    protected function action_article()
    {
        $this->title = 'Статья';
        if(isset($this->params[2])){
            $id = $this->params[2];
            $article = \App\Models\News::findById($id);
        }
        $this->content = $this->template(__DIR__ . '/../templates/article.php', array('article' => $article));
    }
}