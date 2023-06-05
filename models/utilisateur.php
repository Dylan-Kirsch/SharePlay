<?php 

    class Utilisateur
    {

        public int $id;

        public string $nom;

        public string $prenom;

        public string $pseudo;

        public string $email;

        public $mot_de_passe;



        public function __construct(int $pId, string $pNom, string $pPrenom, string $pPseudo, string $pEmail, $pMot_de_passe)
        {
            $this->id = $pId;
            $this->nom = htmlentities($pNom);
            $this->prenom = htmlentities($pPrenom);
            $this->pseudo = htmlentities($pPseudo);
            $this->email = htmlentities(strtolower($pEmail));
            $this->mot_de_passe = htmlentities($pMot_de_passe);
        }



    }












?>