<?php

include_once "_class/Article.php";

$user = 'Se Connecter / S\'identifier';

$allArticles = Article::getAllArticles();

$lastArticle = Article::getLastArticle();

