<?php

    class TypeAffichageDB
    {

        static public function lister():Reponse
        {

            try 
            {
            
                $stmt = Database::getInstance()->query("SELECT * from TYPE_AFFICHAGE;");
                $resultat = $stmt->fetchall();
                $listeTypeAffichage = new ArrayObject();

                foreach ($resultat as $key => $value) {

                    $typeAffichage = new TypeAffichage(
                        $value['id'],
                        $value['types']
                    );
                
                    $listeTypeAffichage->append($typeAffichage);

                }

                return new Reponse($listeTypeAffichage);

            }

            catch(PDOException $e)
            {

                return new Reponse(new ArrayObject(),$e);

            } 
        }

    }















?>