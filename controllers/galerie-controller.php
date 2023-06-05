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
    
        if (count($_POST)==0)
        {
            $jeu = JeuxDB::lister()->getData();
            $univers = UniversDB::lister()->getData();
            
        }
        else
        {   
        
            $resultat = GalerieDB::creer($_POST) && TagDB::creer($_POST);
            if ($resultat)
                include 'views\galerieAjouter.php';
            else
            {
                $jeu = JeuxDB::lister()->getData();
                $univers = UniversDB::lister()->getData();

            } 
                
        }
    }

?>