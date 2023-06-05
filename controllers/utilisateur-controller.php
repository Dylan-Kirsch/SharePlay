<?php 

    function afficherUtilisateur()
    {

        $reponse = UtilisateurDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeUtilisateur = $reponse->getData();
            foreach ($listeUtilisateur as $utilisateur) 
            {
                
                include 'views\inscription.php';
            }
        } 
        else
        include('views\afficherException.php');

    }


    function inscription()
    {
        
        $resultat = UtilisateurDB::creerUser($_POST);

        if ($resultat)
            include 'views\galerieAjouter.php';
        else
        {
            
            echo 'création échouer';

        } 
                
    
    }


?>