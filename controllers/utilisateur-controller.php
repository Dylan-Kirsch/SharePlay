<?php 

    function afficherUtilisateur()
    {

        $reponse = UtilisateurDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeUtilisateur = $reponse->getData();
            foreach ($listeUtilisateur as $utilisateur) 
            {
                
            }
        } 
        else
        include('views\afficherException.php');

    }

    function inscription()
    {
        
        $resultat = UtilisateurDB::creerUtilisateur($_POST);

        if ($resultat)
            include 'views\galerieAjouter.php';
        else
        {
        

        } 
                
    
    }








?>