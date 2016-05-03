<?php foreach ($news as $new):?>
    <div class="new">
        <h2 class="title"><?=$new->title?></h2>
        <p class="cintent"><?=$new->content?></p>
        <em><?=$new->author?></em>
        <p><a href="article.php?id=<?=1?>">Подробнее</a></p>
    </div>
<?php endforeach;?>