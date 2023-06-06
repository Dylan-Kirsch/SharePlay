<?php 

    class Utilisateur
    {
// mettre en place l'encapsulation: $id ->$_id et en private
        public int $id;

        public string $nom;

        public string $prenom;

        public string $pseudo;

        public string $email;

        public string $mot_de_passe;



        public function __construct(int $pId, string $pNom, string $pPrenom, string $pPseudo, string $pEmail, string $pMot_de_passe)
        {
            $this->id = $pId;
            $this->nom = htmlentities($pNom);
            $this->prenom = htmlentities($pPrenom);
            $this->pseudo = htmlentities($pPseudo);
            $this->email = htmlentities($pEmail);
            $this->mot_de_passe = htmlentities($pMot_de_passe);

        }

// mettre getters et setters

        public function getId()
        {
            return $this->id;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function getPseudo()
        {
            return $this->pseudo;
        }

        public function getEmail()
        {
            return $this->email;
        }
        
        public function getMotDePasse()
        {
            return $this->mot_de_passe;
        }



    }












?>