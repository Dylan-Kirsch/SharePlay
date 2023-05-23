<?php

    class TypeAffichage
    {
        public int $id;

        public string $types;


        public function __construct(int $pId, string $pTypes)
        {
            $this->id = $pId;
            $this->types = htmlentities($pTypes);
        }
    }














?>