<?php foreach ($news as $new):?>
    <div class="new">
        <h2 class="title"><?=$new->title?></h2>
        <p class="content"><?=$new->content?></p>
        <em><?=$new->author?></em>
        <p><a href="/news/article/<?=$new->id?>">Подробнее</a></p>
    </div>
<?php endforeach;?>