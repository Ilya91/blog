<?php
require __DIR__ . '/autoload.php';
$news = \App\Models\News::findLastNews();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $item = new \App\Models\News();
    $item->title = $_POST['title'];
    $item->author = $_POST['author'];
    $item->content = $_POST['content'];
    $item->save();
    header('Location: index.php');
}
include __DIR__ . '/App/templates/header.php';
include __DIR__ . '/App/templates/index.php';
include __DIR__ . '/App/templates/footer.php';
