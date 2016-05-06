<?php
include __DIR__ . '/App/templates/header.php';
require __DIR__ . '/autoload.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $view = new \App\View();
    $view->news = \App\Models\News::findById($id);
}
?>
<?php echo $view->render(__DIR__ . '/App/templates/article.php');?>
<?php include __DIR__ . '/App/templates/footer.php';?>
