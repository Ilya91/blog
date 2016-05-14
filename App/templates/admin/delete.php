<?php
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $where = "id = {$id}";
    $item = new \App\Models\News();
    $item->delete($where);
    header('Location: index.php');
}
