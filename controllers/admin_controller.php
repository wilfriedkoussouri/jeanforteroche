<?php
if(isset($_COOKIE['firstname'])) {

    include "_class/Chapiter.php";
    include "_class/Book.php";
    include "_class/Comment.php";

    $header = '';
    $updateTitle = '';
    $test = '';

    $section = $_GET['section'];

    // On verifie si l'on souhaite faire une action

    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        // Mise en place du header
        switch ($action){
            case 'view' OR 'edit' OR 'add';
                $header = 'views/admin/includes/header_action.php';
                break;
            case 'delete';
                $header = 'views/admin/includes/header_empty.php';
                break;
        }

        // Mise en place du contenu
        $content = admin_model::getAction($section, $action);

        if (isset($_POST)) {
            if(isset($_GET['id'])){
                $datas = $section::getOne($_GET['id']);
                $data = new $section($datas);
                if (isset($_POST['deleteElt'])) {
                    admin_model::deleteElt($section, $_GET['id']);
                } elseif (isset($_POST['returnElt'])) {
                    admin_model::returnElt($section);
                } elseif (isset($_POST['postElt'])) {
                    admin_model::postElt($_GET['id']);
                } elseif (isset($_POST['updateEltBook'])) {
                    admin_model::updateEltBook($_GET['id']);
                } elseif (isset($_POST['updateEltChapiter'])) {
                    admin_model::updateEltChapter($_GET['id']);
                } elseif (isset($_POST['valid'])) {
                    Comment::postReport($_GET['id'], 0);
                }
            }elseif(isset($_POST['postEltBook'])){
                admin_model::postEltBook();
            } elseif (isset($_POST['postEltChapter'])) {
                admin_model::postEltChapter();
            }
        }
    } else {
        // On verifie si on souhaite se déconnecter
        if(isset($_GET['section']) AND $_GET['section'] == 'disconnect'){
            setcookie('firstname');
            header('Location:index.php?page=home');
        }

        // Gestion du header de la page ainsi que le contenu (SECTION)
        $header = 'views/admin/includes/header_section.php';
        $content = admin_model::getUrl($section);
        $datas = $section::getAll();

        $section = ucfirst($section);
        switch ($section) {
            case 'Book';
            $name = 'Mes Livres';
            break;
            case 'Chapiter';
            $name = 'Mes Chapitres';
            break;
            case 'Comment';
            $name = 'Les Commentaires';
            $none = 'none';
            break;
        }
    }

} else{
    header('Location:index.php?page=connect');
}