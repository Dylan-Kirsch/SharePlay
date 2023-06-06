<?php 

    function afficherUtilisateur()
    {

        $reponse = UtilisateurDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeUtilisateur = $reponse->getData();
            foreach ($listeUtilisateur as $utilisateur) 
            {
                login();
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



    function login()
    {

        if ((!isset($_POST['email'])||(!isset($_POST['mot_de_passe']))))
            require_once 'views/connexion.php';
        else
        {
            $userConnected = utilisateurDB::checkLogin($_POST['email'],$_POST['mot_de_passe']);
            if ($userConnected)
            {
                $_SESSION['isConnected']=true;
                $_SESSION['userID']= $userConnected->getId();
                // $_SESSION['isAdmin']= $userConnected->isAdmin();
                $_SESSION['pseudo']= $userConnected->pseudo;
               
            }
            else
            {
                require_once 'views/connexion.php';
            }

        }
    }
    function logout()
    {
        unset( $_SESSION['isConnected']);
        unset( $_SESSION['userID']);
        // unset( $_SESSION['isAdmin']);
        unset( $_SESSION['pseudo']);
        
            require_once 'views/connexion.php';
    }








?>