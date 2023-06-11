<?php

    class TypeAffichage
    {
        public int $id;

        public string $types;

        public string $libelle;


        public function __construct(int $pId, string $pTypes, string $pLibelle)
        {
            $this->id = $pId;
            $this->types = htmlentities($pTypes);
            $this->libelle = htmlentities($pLibelle);
        }
    }














?>