<?php

    require_once('config\config.php');

    require_once('repository\database.php');
    require_once('repository\reponse.php');

    require_once('repository\accueilDB.php');
    require_once('repository\galerieDB.php');
    require_once('repository\jeuxDB.php');
    require_once('repository\universDB.php');

    require_once('controllers\accueil-controller.php');
    require_once('controllers\galerie-controller.php');
    require_once('controllers\jeux-controller.php');
    require_once('controllers\univers-controller.php');

    require_once('models\jeux.php');
    require_once('models\accueil.php');
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
        
        case 'ajout':

            if (isset($_GET['id']))
                afficherUneGalerie($_GET['id']);
            else
                afficherGalerie();
            break;
            
        case 'ajouter-galerie':
                ajouterGalerie();
            break;

            

    }





?>