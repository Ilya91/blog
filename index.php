<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findLastNews();

include __DIR__ . '/App/templates/index.php';
