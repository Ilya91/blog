<?php
include __DIR__ . '/App/templates/header.php';
require __DIR__ . '/autoload.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $news = \App\Models\News::findById($id);
}
?>
<?php foreach ($news as $new):?>
<div class="new">
    <h2 class="title"><?=$new->title?></h2>
    <p class="cintent"><?=$new->content?></p>
    <em><?=$new->author?></em>
</div>
<?php endforeach;?>
<?php include __DIR__ . '/App/templates/footer.php';?>
