<?php

require_once __DIR__.'/router.php';

get('/', 'pages/home.php');
get('/news', 'pages/news.php');

any('/404','pages/404.php');