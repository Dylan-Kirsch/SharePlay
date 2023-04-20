<?php

    class Galerie
    {

        public int $id;

        public Jeux $jeux;

        public Univers $univers;


        public function __construct($pId, Jeux $pJeux, Univers $pUnivers)
        {

            $this->id = $pId;
            $this->jeux = $pJeux;
            $this->univers = $pUnivers;
        }


    }

?>