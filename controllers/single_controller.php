<?php

include_once '_class/Chapiter.php';
include_once '_class/Comment.php';

$datas = Chapiter::getOne($_GET['id']);
$data= new Chapiter($datas);

$comments = Comment::getAllByChapter($_GET['id']);

$prev = Chapiter::getOne($datas['chapiter'] - 1);
$next = Chapiter::getOne($datas['chapiter'] + 1);

if(!$prev){
    $displayPrev = 'display:none';
}
if(!$next){
    $displayNext = 'display:none';
}

// COMMENT
$info = '';

if(isset($_POST)){
    if(isset($_POST['postComment'])) {
        if (!empty($_POST['pseudo']) AND !empty($_POST['comment'])) {
            Comment::postComment($_GET['id']);
        } else {
            return $info = 'Veuillez remplir tout les champs';
        }
    }elseif (isset($_POST['report'])) {
        Comment::postReport($_GET['comment'], 1);
        header('Location:index.php?page=single&id='.$_GET['id'].'');
        return $info = 'Le commentaire à été singalé à l\'administrateur';
    }
}



