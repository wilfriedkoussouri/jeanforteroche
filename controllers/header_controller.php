<?php
if (isset($_SESSION['id'])){
    $user = $_SESSION['firstname'];
} else {
    $user = 'Se Connecter / S\'identifier';}
