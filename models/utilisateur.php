<?php 

    class Utilisateur
    {

        public int $id;

        public string $nom;

        public string $prenom;

        public string $pseudo;

        public string $email;

        public string $motDePasse;



        public function __construct(int $pId, string $pNom, string $pPrenom, string $pPseudo, string $pEmail, string $pMotDePasse)
        {
            $this->id = $pId;
            $this->nom = htmlentities($pNom);
            $this->prenom = htmlentities($pPrenom);
            $this->pseudo = htmlentities($pPseudo);
            $this->email = htmlentities($pEmail);
            $this->motDePasse = htmlentities($pMotDePasse);

        }



    }












?>