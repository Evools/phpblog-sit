<?php

require_once __DIR__.'/router.php';

get('/login', 'pages/login.php');
get('/register', 'pages/register.php');

get('/', 'pages/home.php');
get('/about', 'pages/about.php');
get('/contacts', 'pages/contacts.php');
get('/news', 'pages/news.php');


get('/create-user', 'pages/create-user.php');
get('/create-post', 'pages/create-post.php');

get('/inner-topic', 'pages/inner-news.php');


post('/login', 'pages/login.php');
post('/register', 'pages/register.php');

any('/404','pages/404.php');