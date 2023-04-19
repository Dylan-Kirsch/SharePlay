<?php

    require_once('config\config.php');
    require_once('repository\database.php');
    require_once('repository\reponse.php');
    require_once('repository\newsDB.php');
    require_once('controllers\news-controller.php');
    require_once('models\jeux.php');
    require_once('models\news.php');
    require_once('models\univers.php');
    require_once('models\galerie.php');


    session_start();

    if (isset($_GET['/']))
                $accueil = $_GET['/'];
            else
                $accueil = 'news';

    switch($accueil)
    {

        case 'news':

            if (isset($_GET['id'])) 
                afficherUneNews($_GET['id']);
            else
                afficherNews();
            break;

    }





?>