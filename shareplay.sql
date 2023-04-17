CREATE DATABASE IF NOT EXISTS share_play;

CREATE TABLE IF NOT EXISTS Users
(

    id INT primary key AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    pseudo VARCHAR(255) NOT NULL

);

CREATE TABLE IF NOT EXISTS PHOTOS 
(

    id INT primary key AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    resumer TEXT NOT NULL,
    photo VARCHAR(255) NOT NULL,
    tag VARCHAR(255) NOT NULL

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
    pseudo VARCHAR(255) NOT NULL

);


CREATE TABLE IF NOT EXISTS consoles
(

    id INT primary key AUTO_INCREMENT,
    libelle VARCHAR(255) NOT NULL

);

CREATE TABLE IF NOT EXISTS genres
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