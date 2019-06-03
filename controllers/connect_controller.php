<?php
include_once '_class/Members.php';

// Déclaration des variables
$help = '';

    // Verification
    if (isset($_POST['btnconnect'])) {
        if ((isset($_POST['login']) AND
                !empty($_POST['login'])) AND (isset($_POST['password']) AND
                !empty($_POST['password']))) {
            $help = Members::verify($_POST['login'], $_POST['password']);

        }else{
            return $help = 'Veuillez remplir tous les champs';
        }
    }

