<?php foreach ($news as $new): ?>
    <div class="new">
        <h2 class="title"><?= $new->title ?></h2>
        <p class="content"><?= $new->content ?></p>
        <em><?= $new->author ?></em>
        <p><a href="/news/article/<?= $new->id ?>">Подробнее</a></p>
    </div>
<?php endforeach; ?>
<nav>
    <ul class="pagination">
        <li>
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
