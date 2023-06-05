<?php


    class UtilisateurDB
    {

        static public function lister():Reponse
        {

            try
            {

                $stmt = Database::getInstance()->query("SELECT * FROM UTILISATEUR");
                $resultat = $stmt->fetchall();
                $listeUtilisateur = new ArrayObject();

                foreach ($resultat as $key => $value) {
                    
                    $utilisateur = new Utilisateur 
                    (
                        $value['id'],
                        $value['nom'],
                        $value['prenom'],
                        $value['pseudo'],
                        $value['email'],
                        $value['mot_de_passe']

                    );

                    $listeUtilisateur->append($utilisateur);

                }

                return new Reponse($listeUtilisateur);

            }

            catch(PDOException $e)
            {

                //print_r('Gros Problème'.$e->getMessage());
                return new Reponse(new ArrayObject(),$e);

            }


        }



        static public function creerUser($pData):bool
        {

            if (!(isset($pData['nom'])&& strlen($pData['nom']>3)))


                if (!(isset($pData['prenom'])&& strlen($pData['prenom']>3)))


                if (!(isset($pData['pseudo'])&& strlen($pData['pseudo']>3)))


                if (!(isset($pData['email'])&& !filter_var($pData['email'], FILTER_VALIDATE_EMAIL)))


                if (!(isset($pData['mot_de_passe'])&& password_hash($pData['mot_de_passe'], PASSWORD_BCRYPT)))

                

            try
            {
                
                $stmt = Database::getInstance()->prepare("INSERT INTO UTILISATEUR (nom, prenom, pseudo, email, mot_de_passe)
                VALUES(:nom, :prenom, :pseudo, :email, :mot_de_passe)");
                
                $stmt->bindValue(':nom',$pData['nom']);
                $stmt->bindValue(':prenom',$pData['prenom']);
                $stmt->bindValue(':pseudo',$pData['pseudo']);
                $stmt->bindValue(':email',$pData['email']);
                $stmt->bindValue(':mot_de_passe',$pData['mot_de_passe']);
                

                return $stmt->execute();
            }

            catch (PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }

        }
    
    }

?>