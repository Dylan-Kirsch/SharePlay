<?php


    function afficherNews()
    {

        ob_start();

        $reponse = NewsDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeNews = $reponse->getData();

            if ($listeNews)
            {
                foreach ($listeNews as $key=>$news) 

                {
                    if ($key == 0)
                    {
                        $active = "active";
                        
                    }
                    else
                        $active ="";
                        include('views\carousel-news.php');
                }

            }
            
            else
                include 'views\newsNonTrouvee.php';
        } 
        else
        include('views\afficherException.php');

        $carouselNews = ob_get_clean();
        include 'views/layout.php';

    }


    function afficherUneNews($pId)
    {

        ob_start();

        $reponse = NewsDB::lire($pId);

        if ($reponse->isSuccessfull())
        {

            if ($reponse->isDataFound())
            {
                $news = $reponse->getData()[0];
            
                include 'views\carousel-news.php';
            }
            else
                include 'views\newsNonTrouvee.php';
        }
        else
        include('views\afficherException.php');
        
        $carouselNews = ob_get_clean();
        include 'views/layout.php';

    }

?>