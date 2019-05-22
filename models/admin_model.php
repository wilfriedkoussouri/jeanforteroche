<?php
if (isset($_SESSION['id']) && $_SESSION['id'] > 0) {
    $allArticles = Article::getAllArticles();
}
else {
    header('Location: http://www.sfr.fr');
}