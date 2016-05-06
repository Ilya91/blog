<?php foreach($this->news as $item):?>
<div class="new">
        <h2 class="title"><?=$item->title?></h2>
        <p class="content"><?=$item->content?></p>
        <em><?=$item->author?></em>
    </div>
<?php endforeach;?>
