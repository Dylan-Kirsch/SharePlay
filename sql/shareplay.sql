CREATE DATABASE IF NOT EXISTS share_play;

CREATE TABLE IF NOT EXISTS User
(

    id INT primary key AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    pseudo VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL

);


CREATE TABLE IF NOT EXISTS administrateur
(

    id INT primary key AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    pseudo VARCHAR(255) NOT NULL

);

CREATE TABLE IF NOT EXISTS type_affichage
(

    id INT primary key AUTO_INCREMENT,
    types VARCHAR(255) NOT NULL

);

CREATE TABLE IF NOT EXISTS galerie
(

    id INT primary key AUTO_INCREMENT,
    num_jeu int NOT NULL,
    num_univers int NOT NULL,
    FOREIGN KEY (num_jeu) REFERENCES jeu(id),
    FOREIGN KEY (num_univers) REFERENCES univers (id)

);

CREATE TABLE IF NOT EXISTS photo
(

    id INT primary key AUTO_INCREMENT,
    photo VARCHAR(255) NOT NULL

);


CREATE TABLE IF NOT EXISTS console
(

    id INT primary key AUTO_INCREMENT,
    libelle VARCHAR(255) NOT NULL

);


CREATE TABLE IF NOT EXISTS news
(

    id INT primary key AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    information text NOT NULL,
    photo VARCHAR(255) NOT NULL

);

CREATE TABLE IF NOT EXISTS tag
(

    id INT primary key AUTO_INCREMENT,
    libelle VARCHAR(255) NOT NULL

);