<?php

    require_once('config\config.php');
    require_once('repository\database.php');
    require_once('repository\reponse.php');
    require_once('models\jeux.php');
    require_once('mofels\news.php');
    require_once('models\univers.php');
    require_once('models\galerie-creer.php');


    session_start();

    if (isset($_GET['/']))
                $accueil = $_GET['/'];
            else
                $accueil = '';






?>