<?php

    function afficherJeux()
    {

        ob_start();

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

        $ajout = ob_get_clean();
        include 'views/layout.php';

    }


    function afficherUnJeux($pId)
    {

        ob_start();

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
        
        $ajout = ob_get_clean();
        include 'views/layout.php';

    }

?>