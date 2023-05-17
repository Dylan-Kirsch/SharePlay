<?php

    function afficherJeux()
    {

        $reponse = JeuxDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeJeux = $reponse->getData();
            foreach ($listeJeux as $jeux) 
            {

                include 'views\ajoutRecent.php';

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