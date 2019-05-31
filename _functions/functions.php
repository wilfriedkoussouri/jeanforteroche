<?php

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function getReport($var){
    if($var === '1'){
        return ('Ce commentaire à été signalé');
    }else {
        return '';
    }
}

function transformedate($var){
    return date_format(date_create($var), "d/m/Y");
}



