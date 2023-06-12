<?php 
class UtilisateurController extends Controller
{
    public static function afficherUtilisateur()
    {
       
        $reponse = UtilisateurDB::lister();
        if ($reponse->isSuccessfull())
        {
            $listeUtilisateur = $reponse->getData();
            // var_dump($listeUtilisateur);
            foreach ($listeUtilisateur as $utilisateur) 
            {
                
            }
        } 
        else
        include('views\afficherException.php');
        
    }


    public static function afficherFormulaireInscription()
    {//affichage du formulaire => il faut générer le token CRSF

        $token = UtilisateurController::getCSRFToken();
        include 'views\formulaire\inscription.php';

    }
    public static function afficherFormulaireConnexion()
    {//affichage du formulaire => il faut générer le token CRSF

        $token = UtilisateurController::getCSRFToken();
        include 'views\formulaire\inscription.php';
 
    }


    public static function inscription()
    {
        // Les tests de garde sont réalisés dans UtilisateurDB::creerUtilisateur()
        if (UtilisateurController::checkCSRFToken())
        {
            $resultat = UtilisateurDB::creerUtilisateur($_POST);
            if ($resultat)
            {
                $_SESSION['message']='views\success\utilisateurAjouter.php';
                header('Location: index.php');
            }
                
            else
              {
                $_SESSION['error']='views\afficherException.php';
                header('Location: index.php');
              } 
        }
        else
        {

                $_SESSION['error']='SECURITY ISSUE';
                header('Location: index.php');
        }
                     
    }



    public static function login()
    {
        if ((!isset($_POST['email'])||(!isset($_POST['password']))))
            require_once 'views\formulaire\inscription.php';
        else
        {
            $userConnected = utilisateurDB::checkLogin($_POST['email'],$_POST['password']);
            if ($userConnected)
            {
                $_SESSION['isConnected']=true;
                $_SESSION['userID']= $userConnected->getId();
                $_SESSION['pseudo']= $userConnected->getPseudo();
                $_SESSION['message']='Bienvenue '. $userConnected->getPseudo();
                header('Location: index.php');
               
            }
            else
            {
                require_once 'views\formulaire\inscription.php';
            }

        }
    }
    public static function logout()
    {
        $_SESSION['message']='Au revoir '. $_SESSION['pseudo'];
        unset( $_SESSION['isConnected']);
        unset( $_SESSION['userID']);
        // unset( $_SESSION['isAdmin']);
        unset( $_SESSION['pseudo']);
        header('Location: index.php');
        
    }

}






?>