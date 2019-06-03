<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
error_reporting(E_ALL);
ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();

// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "Jean Forteroche");
define("WEBSITE_NAME", "Jean Forteroche");
define("WEBSITE_URL", "https://jeanforteroche.webagency.yj.fr");
define("WEBSITE_DESCRIPTION", "T");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "webanugf_jeanforteroche");
define("DATABASE_USER", "webanugf_will");
define("DATABASE_PASSWORD", "koussouri25");


// Language
define("DEFAULT_LANGUAGE", "fr");