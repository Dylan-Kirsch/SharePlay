<?php

    function afficherGalerie()
    {

        ob_start();

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

        $ajout = ob_get_clean();
        include 'views/layout.php';

    }


    function afficherUneGalerie($pId)
    {

        ob_start();

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
        include('views\afficherException.php');
        
        $ajout = ob_get_clean();
        include 'views/layout.php';

    }


    function ajouterGalerie()
    {
    
    ob_start();
    
    if (count($_POST)==0)
    {
        $jeux = JeuxDB::lister()->getData();
        $univers = UniversDB::lister()->getData();
        include 'views\formGalerie.php';
    }
    else
    {   
       
            $resultat = GalerieDB::creer($_POST);
            if ($resultat)
                include 'views\galerieAjouter.php';
            else
            {
                $jeux = JeuxDB::lister()->getData();
                $univers = UniversDB::lister()->getData();
                include 'views\formGalerie.php';
            }

            
    }

    $ajout = ob_get_clean();
    include 'views/layout.php';
    }

?>