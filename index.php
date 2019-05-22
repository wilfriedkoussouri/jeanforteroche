<?php

// Inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_config/db.php';

// Définition de la page courante
if (isset($_GET['page']) AND !Empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page'])); // Controle demande utilisateur
} else {
    $page = 'home';
}

// Array contenant toutes les pages
$allPages = scandir('controllers/');

// Vérification de l'existance de la page
if (in_array($page.'_controller.php', $allPages)) {

    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
} else {
    // Retour d'une erreur
    echo 'Ereur 404';
}