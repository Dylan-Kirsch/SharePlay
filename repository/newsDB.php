<?php


    class NewsDB
    {

        static public function lister():Reponse
        {

            try
            {

                $stmt = Database::getInstance()->query("SELECT * FROM NEWS");
                $resultat = $stmt->fetchall();
                $listeNews = new ArrayObject();

                foreach ($resultat as $key => $value) {
                    
                    $news = new News 
                    (
                        $value['id'],
                        $value['titre'],
                        $value['information'],
                        $value['photo']
                    );

                    $listeNews->append($news);

                }

                return new Reponse($listeNews);

            }

            catch(PDOException $e)
            {

                //print_r('Gros Problème'.$e->getMessage());
                return new Reponse(new ArrayObject(),$e);

            }


        }


        static function lire(int $pId):Reponse
        {

            if (!is_numeric($pId)||$pId<=0)
                return new Reponse(new ArrayObject());

            try
            {

                $stmt = Database::getInstance()->query("SELECT * FROM NEWS");
                $value = $stmt->fetcha();
                $resultat = new ArrayObject();

                if ($value!=false) {
                    
                    $news = new News 
                    (
                        $value['id'],
                        $value['titre'],
                        $value['information'],
                        $value['photo']
                    );

                    $resultat->append($news);
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


    }


?>