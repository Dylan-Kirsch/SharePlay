<?php

    class Jeux {

        public int $id;

        public string $titre;

        public string $photo_default;

        public function __construct(int $pId, string $pTitre, string $pPhoto_default) {

            $this->id = $pId;
            $this->titre = htmlentities($pTitre);
            $this->photo_default = $pPhoto_default;
        }

    }

?>