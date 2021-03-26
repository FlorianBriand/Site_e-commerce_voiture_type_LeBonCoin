CREATE TABLE
IF NOT EXISTS marque
(
    idmarque INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    nom VARCHAR
(30)
);

INSERT INTO marque
    (nom)
VALUES
    ('BMW'),
    ('Mercedes'),
    ('Ferrari'),
    ('Porsche'),
    ('Bugatti'),
    ('Peugeot'),
    ('Renault'),
    ('Citroen'),
    ('Honda');

CREATE TABLE
IF NOT EXISTS couleur
(
    idcouleur INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    nom VARCHAR
(30)
);

INSERT INTO couleur
    (nom)
VALUES
    ('Noir'),
    ('Bleu'),
    ('Blanc'),
    ('Gris'),
    ('Rouge'),
    ('Vert'),
    ('Or'),
    ('Argent');

CREATE TABLE
IF NOT EXISTS energie
(
    idenergie INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    nom VARCHAR
(30)
);

INSERT INTO energie
    (nom)
VALUES
    ('Essence'),
    ('Diesel'),
    ('Hybrid'),
    ('Electrique');

CREATE TABLE
IF NOT EXISTS utilisateur
(
    idutilisateur INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    nom VARCHAR
(30) NOT NULL,
    prenom VARCHAR
(30) NOT NULL,
    mail VARCHAR
(50) NOT NULL,
    telephone VARCHAR
(12) DEFAULT NULL,
    mdp VARCHAR
(100) DEFAULT NULL,
    niveau VARCHAR
(2) DEFAULT NULL
);

INSERT INTO utilisateur
    (nom, prenom, mail, telephone, mdp, niveau)
VALUES
    ('Coutinho', 'Raphael', 'coutinhora@eisti.eu', '', '', '3'),
    ('Bouvart', 'Erwan', 'bouvarterw@eisti.eu', '', '', '3'),
    ('Briand', 'Florian', 'briandflor@eisti.eu', '', '', '3'),
    ('Marcillaud', 'Julien', 'julien.marcillaud@eisti.eu', '', '', '3');

CREATE TABLE
IF NOT EXISTS voiture
(
    idvoiture INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    idmarque INT
(5) DEFAULT NULL,
    FOREIGN KEY
(idmarque) REFERENCES marque
(idmarque),
    annee INT
(10) NOT NULL,
    idcouleur INT
(5) DEFAULT NULL,
    FOREIGN KEY
(idcouleur) REFERENCES couleur
(idcouleur),
    prix FLOAT
(24) NOT NULL,
    kilometrage FLOAT
(24) NOT NULL,
    idenergie INT
(5) DEFAULT NULL,
    FOREIGN KEY
(idenergie) REFERENCES energie
(idenergie),
    picture VARCHAR
(500) DEFAULT NULL,
    affichage INT
(2) NOT NULL
);

INSERT INTO voiture
    (idmarque, annee, idcouleur, prix, kilometrage, idenergie, picture, affichage)
VALUES
    ('1', '2010', '1', '25000', '100000', '2', 'img/BMW2010.jpg', '0'),
    ('2', '2008', '4', '55000', '45000', '1', 'img/Mercedes2008.jpg', '0'),
    ('5', '2012', '7', '600000', '20', '1', 'img/Bugatti2012.jpg', '0'),
    ('4', '1999', '1', '55000', '75000', '2', 'img/Porsche1999.jpg', '0'),
    ('2', '2019', '2', '120000', '0', '4', 'img/Mercedes2019.jpg', '0');

CREATE TABLE
IF NOT EXISTS operation
(
    idutilisateur INT
(5),
    FOREIGN KEY
(idutilisateur) REFERENCES utilisateur
(idutilisateur),
    idvoiture INT
(5),
    FOREIGN KEY
(idvoiture) REFERENCES voiture
(idvoiture),
    statut INT
(2) NOT NULL,
    jour VARCHAR
(500) NULL
);

INSERT INTO operation
    (idutilisateur,idvoiture,statut,jour)
VALUES
    ('1', '1', '0', ''),
    ('1', '5', '0', ''),
    ('2', '2', '0', ''),
    ('3', '3', '0', ''),
    ('4', '4', '0', '');