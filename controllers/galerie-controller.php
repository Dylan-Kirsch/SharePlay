<?php

    function afficherGalerie()
    {

        $reponse = GalerieDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeGalerie = $reponse->getData();
            foreach ($listeGalerie as $galerie) 
            {

                include 'views\ajoutRecent.php';

            }
        } 
        else
        include('views\afficherException.php');

    }


    function afficherUneGalerie($pId)
    {

        $reponse = GalerieDB::lire($pId);

        if ($reponse->isSuccessfull())
        {

            if ($reponse->isDataFound())
            {

                $galerie = $reponse->getData()[0];
                include 'views\ajoutRecent.php';

            }
            else
                include('views\galerieNonTrouvee.php');
        }
        else
        {
            include('views\afficherException.php');
        }

    }


    function ajouterGalerie()
    {
      
        // $_SESSION['userID'] -> contient l'id de l'utilisateur connecté
    
        if (count($_POST)==0)
        {
            $jeu = JeuxDB::lister()->getData();
            $univers = UniversDB::lister()->getData();
            
        }
        else
        {   
    
            if (AccueilController::isNotConnected())
            {
                $_SESSION['message']='Il faut être connecté';
                header('Location: index.php');
            }
            $resultat = GalerieDB::creer($_POST) && TagDB::creer($_POST);
            if ($resultat)
                include 'views\success\galerieAjouter.php';
            else
            {
                $jeu = JeuxDB::lister()->getData();
                $univers = UniversDB::lister()->getData();

            }
                
        }
    }

?>