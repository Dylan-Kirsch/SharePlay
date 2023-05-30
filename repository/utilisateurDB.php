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
                    
                    $news = new Utilisateur 
                    (
                        $value['id'],
                        $value['nom'],
                        $value['prenom'],
                        $value['pseudo'],
                        $value['email'],
                        $value['motDePasse']

                    );

                    $listeUtilisateur->append($news);

                }

                return new Reponse($listeUtilisateur);

            }

            catch(PDOException $e)
            {

                //print_r('Gros Problème'.$e->getMessage());
                return new Reponse(new ArrayObject(),$e);

            }


        }
    
    }

?>