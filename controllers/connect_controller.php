<?php
$error = '';

if (isset($_SESSION['id'])){
    include_once "_class/Article.php";
    $allArticles = Article::getAllArticles();
    $page='admin';
} else {
if (!empty($_POST) && isset($_POST['btnconnect'])) {

    $login = htmlspecialchars($_POST['login']);
    $pass = $_POST['pass'];

    if (!empty($login) AND !empty($pass)) {
        $reqUser = $db->prepare('SELECT * FROM members WHERE email = ? AND password = ?');
        $reqUser->execute(array($login, $pass));
        $userExist = $reqUser->rowCount();
        if ($userExist == 1) {
            $userInfo = $reqUser->fetch();
            $_SESSION['id'] = $userInfo['id'];
            $_SESSION['firstname'] = $userInfo['firstname'];
            $_SESSION['email'] = $userInfo['email'];
            $page = 'admin';

        } else {
            $error = "Mauvais mail ou mot de passe";
        }

    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}
}