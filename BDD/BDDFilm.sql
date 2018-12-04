DROP DATABASE IF EXISTS BDDFilm;

CREATE DATABASE BDDFilm ;

USE BDDFilm ;

DROP TABLE IF EXISTS Pays ;
CREATE TABLE Pays (idPays INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
nomPays VARCHAR(50)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Film ;
CREATE TABLE Film (idFilm INT AUTO_INCREMENT ,
resumeFilm TEXT,
anneeFilm YEAR,
dureeFilm INT,
nomFilm VARCHAR(255),
afficheFilm TEXT,
lienBandeAnnonce TEXT,
idUtilisateur INT,
PRIMARY KEY (idFilm)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Utilisateur ;
CREATE TABLE Utilisateur (idUtilisateur INT AUTO_INCREMENT NOT NULL,
pseudoUtilisateur VARCHAR(25),
PRIMARY KEY (idUtilisateur)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Genre ;
CREATE TABLE Genre (idGenre INT AUTO_INCREMENT NOT NULL,
nomGenre VARCHAR(255),
PRIMARY KEY (idGenre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Personne ;
CREATE TABLE Personne (idPersonne INT AUTO_INCREMENT NOT NULL,
nomPersonne VARCHAR(50),
idPays INT,
PRIMARY KEY (idPersonne)) ENGINE=InnoDB;

DROP TABLE IF EXISTS MotCle ;
CREATE TABLE MotCle (idMotCle INT AUTO_INCREMENT NOT NULL,
MotCle VARCHAR(55),
PRIMARY KEY (idMotCle)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Vient_de ;
CREATE TABLE Vient_de (idPays INT AUTO_INCREMENT NOT NULL,
idFilm INT NOT NULL,
PRIMARY KEY (idPays,
 idFilm)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Est_genre ;
CREATE TABLE Est_genre (idEstGenre INT AUTO_INCREMENT NOT NULL, idFilm INT NOT NULL,
idGenre INT NOT NULL,
PRIMARY KEY (idEstGenre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Joue_dans ;
CREATE TABLE Joue_Dans (idJoueDans INT AUTO_INCREMENT NOT NULL, idPersonne INT NOT NULL,
idFilm INT NOT NULL,
role VARCHAR(255),
PRIMARY KEY (idJoueDans)) ENGINE=InnoDB;

DROP TABLE IF EXISTS A_realise ;
CREATE TABLE A_realise (idARealise INT AUTO_INCREMENT NOT NULL, idPersonne INT NOT NULL,
idFilm INT NOT NULL,
PRIMARY KEY (idARealise)) ENGINE=InnoDB;

DROP TABLE IF EXISTS A_ecrit ;
CREATE TABLE A_ecrit (idAEcrit INT AUTO_INCREMENT NOT NULL, idFilm INT NOT NULL,
idPersonne INT NOT NULL,
PRIMARY KEY (idAEcrit)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Definit ;
CREATE TABLE Definit (idDefinit INT AUTO_INCREMENT NOT NULL, idMotCle INT NOT NULL,
idFilm INT NOT NULL,
PRIMARY KEY (idDefinit)) ENGINE=InnoDB;


ALTER TABLE Film ADD CONSTRAINT FK_Film_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (idUtilisateur);
ALTER TABLE Personne ADD CONSTRAINT FK_personne_idPays FOREIGN KEY (idPays) REFERENCES Pays (idPays);
ALTER TABLE Vient_de ADD CONSTRAINT FK_vient_de_idPays FOREIGN KEY (idPays) REFERENCES Pays (idPays);
ALTER TABLE Vient_de ADD CONSTRAINT FK_vient_de_idFilm FOREIGN KEY (idFilm) REFERENCES Film (idFilm);
ALTER TABLE Est_genre ADD CONSTRAINT FK_est_idFilm FOREIGN KEY (idFilm) REFERENCES Film (idFilm);
ALTER TABLE Est_genre ADD CONSTRAINT FK_est_idGenre FOREIGN KEY (idGenre) REFERENCES Genre (idGenre);
ALTER TABLE Joue_Dans ADD CONSTRAINT FK_joue_idPersonne FOREIGN KEY (idPersonne) REFERENCES Personne (idPersonne);
ALTER TABLE Joue_Dans ADD CONSTRAINT FK_joue_idFilm FOREIGN KEY (idFilm) REFERENCES Film (idFilm);
ALTER TABLE A_realise ADD CONSTRAINT FK_realise_idPersonne FOREIGN KEY (idPersonne) REFERENCES Personne (idPersonne);
ALTER TABLE A_realise ADD CONSTRAINT FK_realise_idFilm FOREIGN KEY (idFilm) REFERENCES Film (idFilm);
ALTER TABLE A_ecrit ADD CONSTRAINT FK_ecrit_idFilm FOREIGN KEY (idFilm) REFERENCES Film (idFilm);
ALTER TABLE A_ecrit ADD CONSTRAINT FK_ecrit_idPersonne FOREIGN KEY (idPersonne) REFERENCES Personne (idPersonne);
ALTER TABLE Definit ADD CONSTRAINT FK_definit_idMotCle FOREIGN KEY (idMotCle) REFERENCES MotCle (idMotCle);
ALTER TABLE Definit ADD CONSTRAINT FK_definit_idFilm FOREIGN KEY (idFilm) REFERENCES Film (idFilm);
