<?php
    
    function afficherUnivers()
    {

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

    }


    function afficherUnUnivers($pId)
    {

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
        
    }

?>