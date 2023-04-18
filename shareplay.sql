CREATE DATABASE IF NOT EXISTS share_play;

CREATE TABLE IF NOT EXISTS Users
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

CREATE TABLE IF NOT EXISTS galeries
(

    id INT primary key AUTO_INCREMENT,
    types VARCHAR(255) NOT NULL

);

CREATE TABLE IF NOT EXISTS galeries_creer
(

    id INT primary key AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    tag VARCHAR(255) NOT NULL,
    pseudo VARCHAR(255) NOT NULL

);


CREATE TABLE IF NOT EXISTS consoles
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

CREATE TABLE IF NOT EXISTS likes
(

    num_user INT,
    num_galerie_creer INT

);

CREATE TABLE IF NOT EXISTS commenter
(

    num_user INT,
    num_galerie_creer INT

);
