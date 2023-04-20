<?php

    function afficherUnivers()
    {

        ob_start();

        $reponse = UniversDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeUnivers = $reponse->getData();
            foreach ($listeUnivers as $univers) 
            {

                include 'views\ajoutRecent.php';

            }
        } 
        else
        include('views\afficherException.php');

        $ajout = ob_get_clean();
        include 'views/layout.php';

    }


    function afficherUnUnivers($pId)
    {

        ob_start();

        $reponse = UniversDB::lire($pId);

        if ($reponse->isSuccessfull())
        {

            if ($reponse->isDataFound())
            {

                $jeux = $reponse->getData()[0];
                include 'views\ajoutRecent.php';

            }
            else
                include('views\universNonTrouvee.php');
        }
        else
        include('views\afficherException.php');
        
        $ajout = ob_get_clean();
        include 'views/layout.php';

    }

?>