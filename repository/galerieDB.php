<?php

    class GalerieDB
    {
        
        static public function lister():Reponse
        {

            try 
            {
            
                $stmt = Database::getInstance()->query("SELECT *, 
                                                        galerie.id as 'idGalerie', jeu.id as 'idJeu',univers.id as 'idUnivers', utilisateur.id as 'iduser'
                                                        FROM GALERIE ,JEU, UNIVERS, UTILISATEUR
                                                        WHERE JEU.ID = GALERIE.num_jeu
                                                        AND UNIVERS.ID = GALERIE.num_univers
                                                        AND UTILISATEUR.ID = GALERIE.numutilisateur;");

                $resultat = $stmt->fetchall();
                $listeGalerie = new ArrayObject();

                foreach ($resultat as $key => $value) {

                    $jeux = new Jeux(
                        $value['id'],
                        $value['titre'],
                        $value['photo_default']
                    );

                    $univers = new Univers(
                        $value['id'],
                        $value['titre'],
                        $value['photo_default']
                    );
                    
                    // $tag = new Tag(
                    //     $value['id'],
                    //     $value['libelle']
                    // );

                    // $photo = new Photo(
                    //     $value['id'],
                    //     $value['photo']
                    // );

                    // $typeAffichage = new TypeAffichage(
                    //     $value['id'],
                    //     $value['types']
                    // );

                    $utilisateur = new Utilisateur(
                        $value['id'],
                        $value['nom'],
                        $value['prenom'],
                        $value['pseudo'],
                        $value['email'],
                        $value['mot_de_passe']
                    );


                    $galerie = new Galerie(
                        $value['id'],
                        $jeux,
                        $univers,
                        // $tag,
                        // $photo,
                        // $typeAffichage
                        $utilisateur
                    );

                    
                
                    $listeGalerie->append($galerie);

                }

                return new Reponse($listeGalerie);

            }

            catch(PDOException $e)
            {

                //print_r('Gros Problème'.$e->getMessage());
                return new Reponse(new ArrayObject(),$e);

            }

            
        }


        static public function lire(int $pId):Reponse
        {   

            if (!is_numeric($pId)||$pId<=0)
                return new Reponse(new ArrayObject());

            try 
            {
            
                $stmt = Database::getInstance()->query("SELECT *, galerie.id as 'idGalerie', jeu.id as 'idJeu',univers.id as 'idUnivers' 
                                                        FROM GALERIE,JEU,UNIVERS 
                                                        WHERE JEU.ID = GALERIE.num_JEU
                                                        AND UNIVERS.ID = GALERIE.num_UNIVERS
                                                        AND GALERIE.ID =".$pId.";");

                $value = $stmt->fetch();
                $resultat = new ArrayObject();

                if ($value!=false)
                {

                    $jeux = new Jeux(
                        $value['id'],
                        $value['titre'],
                        $value['photo_default']
                    );

                    $univers = new Univers(
                        $value['id'],
                        $value['titre'],
                        $value['photo_default']
                    );

                    // $tag = new Tag(
                    //     $value['id'],
                    //     $value['libelle']
                    // );

                    // $photo = new Photo(
                    //     $value['id'],
                    //     $value['photo']
                    // );

                    // $typeAffichage = new TypeAffichage(
                    //     $value['id'],
                    //     $value['types']
                    // );

                    $galerie = new Galerie(
                        $value['id'],
                        $jeux,
                        $univers,
                        // $tag,
                        // $photo,
                        // $typeAffichage
                    );
                
                    $resultat->append($galerie);
                    
                    return new Reponse($resultat);
                } 
                else
                return new Reponse(new ArrayObject());
            }

            catch(PDOException $e)
            {

                print_r('Gros Problème'.$e->getMessage());
                return new Reponse(new ArrayObject(),$e);
                
            }

            
        }


        static public function creer($pData):bool
        {
        
            
            if (!(isset($pData['idJeu'])&& is_numeric($pData['idJeu'])))
                return false;
                if (!(isset($pData['idUnivers'])&& is_numeric($pData['idUnivers'])))
                return false;
                // if (!(isset($pData['idTag'])&& is_numeric($pData['idTag'])))
                // return false;
                if (!(isset($pData['idUser'])&& is_numeric($pData['idUser'])))
                return false;

            try
            {
                
                $stmt = Database::getInstance()->prepare("INSERT INTO GALERIE (num_jeu, num_univers, num_utilisateur)
                VALUES(:idJeu, :idUnivers, :idUser)");
                
                $stmt->bindValue(':idJeu',$pData['idJeu']);
                $stmt->bindValue(':idUnivers',$pData['idUnivers']);
                // $stmt->bindValue(':idTag',$pData['idTag']);
                $stmt->bindValue(':idUser',$pData['idUser']);

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