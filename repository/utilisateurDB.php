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
                        $value['mot_de_passe']

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


        static public function creerUtilisateur($pData):bool
        {
        
            
            if (!(isset($pData['nom'])&& strlen($pData['nom'])))
                return false;
                if (!(isset($pData['prenom'])&& strlen($pData['prenom'])))
                return false;
                if (!(isset($pData['pseudo'])&& strlen($pData['pseudo'])))
                return false;
                if (!(isset($pData['email'])&& strlen($pData['email'])))
                return false;
                if (!(isset($pData['mot_de_passe'])&& strlen($pData['mot_de_passe'])))
                return false;
            if (!filter_var($pData['email'], FILTER_VALIDATE_EMAIL))
                return false;
            try
            {
                
                $stmt = Database::getInstance()->prepare("INSERT INTO UTILISATEUR (nom, prenom, pseudo, email, mot_de_passe)
                VALUES(:nom, :prenom, :pseudo, :email, :mot_de_passe)");
                
                $stmt->bindValue(':nom',$pData['nom']);
                $stmt->bindValue(':prenom',$pData['prenom']);
                $stmt->bindValue(':pseudo',$pData['pseudo']);
                $stmt->bindValue(':email', $pData['email']);
                $stmt->bindValue(':mot_de_passe',password_hash($pData['mot_de_passe'], PASSWORD_BCRYPT));

                return $stmt->execute();
            }

            catch (PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
            
        }

        public static function checkLogin($email,$mot_de_passe)
        {
        try
        {
            $sql= "SELECT * from `utilisateur`where email like :email and mot_de_passe like :mot_de_passe;";
            $db=DataBase::getInstance()->prepare($sql);
            // les parties variables marquées par : sont remplacées grace a un tableau associatif!
            // cela protège de l'injection SQL
            $db->execute([
                'email'=>$email,
                'mot_de_passe'=>$mot_de_passe
            ]);
            $tuple = $db->fetch();
            // var_dump($tuple);
            if ($tuple)
                {
                    $utilisateur = new Utilisateur($tuple['nom'],$tuple['prenom'],$tuple['pseudo'],$tuple['email'],$tuple['mot_de_passe'],$tuple['id']);
                    return $utilisateur;
                }
                else
                return false;
        }
        catch (PDOException $exception) 
        {
            $msgErreur =$exception->getMessage();
            require_once './views/errors/template-affichage-erreur.php';
        } 
        }
    
    }

?>