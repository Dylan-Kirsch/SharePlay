<?php

    class GalerieCreer
    {

        public int $id;

        public string $titre;

        public $photo;

        public string $tag;

        public string $pseudo;


        public function __construct($pId, $pTitre, $pPhoto, $pTag, $pPseudo)
        {

            $this->id = $pId;
            $this->titre = htmlentities($pTitre);
            $this->photo = htmlentities($pPhoto);
            $this->tag = htmlentities($pTag);
            $this->pseudo = htmlentities($pPseudo);

        }


    }

?>