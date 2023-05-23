<?php

    function afficherJeux()
    {

        $reponse = GalerieDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeGalerie = $reponse->getData();
            foreach ($listeGalerie as $galerie) 
            {

                include 'views\jeuxPlusRegarder.php';

            }
        } 
        else
        include('views\afficherException.php');

    }


    function afficherUnJeux($pId)
    {

        $reponse = JeuxDB::lire($pId);

        if ($reponse->isSuccessfull())
        {

            if ($reponse->isDataFound())
            {

                $jeux = $reponse->getData()[0];
                include 'views\ajoutRecent.php';

            }
            else
                include('views\jeuxNonTrouvee.php');
        }
        else
        include('views\afficherException.php');

    }

?>