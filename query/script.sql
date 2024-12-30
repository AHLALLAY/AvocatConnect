CREATE DATABASE AvocatConnect;
USE AvocatConnect;

CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    telephone VARCHAR(15),
    email VARCHAR(100),
    password_hash VARCHAR(255),
    date_naissance DATE,
    date_inscription DATE,
    roles ENUM('avocat', 'client')
);


DROP TABLE users;

CREATE TABLE info_supp(
    id_avocat INT PRIMARY KEY AUTO_INCREMENT,
    specialite ENUM(
        'Droit de l\'arbitrage',
        'Droit des associations et des fondations',
        'Droit des assurances',
        'Droit bancaire et boursier',
        'Droit commercial, des affaires et de la concurrence',
        'Droit du crédit et de la consommation',
        'Droit du dommage corporel',
        'Droit des enfants',
        'Droit de l\'environnement',
        'Droit des étrangers et de la nationalité',
        'Droit de la famille, des personnes et de leur patrimoine',
        'Droit de la fiducie',
        'Droit fiscal et droit douanier',
        'Droit des garanties, des sûretés et des mesures d\'exécution',
        'Droit immobilier',
        'Droit international et de l\'Union européenne',
        'Droit du numérique et des communications',
        'Droit pénal',
        'Droit de la propriété intellectuelle',
        'Droit de la protection des données personnelles',
        'Droit public',
        'Droit rural',
        'Droit de la santé',
        'Droit de la sécurité sociale et de la protection sociale',
        'Droit des sociétés',
        'Droit du sport',
        'Droit des transports',
        'Droit du travail'
    ),
    experience INT,
    id_client INT,
    Foreign Key (id_client) REFERENCES users(id_user)
);

CREATE TABLE rdv (
    id_rdv INT PRIMARY KEY AUTO_INCREMENT,
    statut ENUM ('En attend', 'Confirmer', 'Annuler'),
    date_rdv DATE,
    id_avocat INT,
    id_client INT,
    Foreign Key (id_avocat) REFERENCES info_supp(id_avocat),
    Foreign Key (id_client) REFERENCES users(id_user)

);
select id_avocat from rdv where date_rdv < 13/12/2024
JOIN users on rdv.id

CREATE TABLE disponible(
    id_dispo INT PRIMARY KEY AUTO_INCREMENT,
    debut DATE NOT NULL,
    fin DATE NOT NULL,
    Foreign Key (id_avocat) REFERENCES info_supp(id_avocat)
);


INSERT INTO users (nom, prenom, telephone, email, password_hash, date_naissance, date_inscription, roles) VALUES
('El Fassi', 'Ahmed', '0612345678', 'ahmed.elfassi@email.com', 'password_hash_1', '1980-03-10', '2024-12-21', 'client'),
('Benjelloun', 'Sofia', '0623456789', 'sofia.benjelloun@email.com', 'password_hash_2', '1985-07-15', '2024-12-21', 'avocat'),
('Zahra', 'Mouhcine', '0634567890', 'zahra.mouhcine@email.com', 'password_hash_3', '1990-02-01', '2024-12-21', 'client'),
('El Amrani', 'Youssef', '0645678901', 'youssef.elamrani@email.com', 'password_hash_4', '1982-06-20', '2024-12-21', 'avocat'),
('Boulahya', 'Khalid', '0656789012', 'khalid.boulahya@email.com', 'password_hash_5', '1995-01-30', '2024-12-21', 'client'),
('Ouali', 'Mouna', '0667890123', 'mouna.ouali@email.com', 'password_hash_6', '1988-11-12', '2024-12-21', 'avocat'),
('Cherkaoui', 'Yassine', '0678901234', 'yassine.cherkaoui@email.com', 'password_hash_7', '1993-05-22', '2024-12-21', 'client'),
('El Khayat', 'Asma', '0689012345', 'asma.elkhayat@email.com', 'password_hash_8', '1990-09-14', '2024-12-21', 'avocat'),
('Bennani', 'Amina', '0690123456', 'amina.bennani@email.com', 'password_hash_9', '1987-01-17', '2024-12-21', 'client'),
('Moufid', 'Hassan', '0612233445', 'hassan.moufid@email.com', 'password_hash_10', '1992-12-08', '2024-12-21', 'avocat'),
('Chouaib', 'Karim', '0623344556', 'karim.chouaib@email.com', 'password_hash_11', '1984-04-11', '2024-12-21', 'client'),
('El Ouafi', 'Salma', '0634455667', 'salma.elouafi@email.com', 'password_hash_12', '1980-08-25', '2024-12-21', 'avocat'),
('Boudraa', 'Rachid', '0645566778', 'rachid.boudraa@email.com', 'password_hash_13', '1991-02-10', '2024-12-21', 'client'),
('Ait Ali', 'Karima', '0656677889', 'karima.aitali@email.com', 'password_hash_14', '1994-06-03', '2024-12-21', 'avocat'),
('Ziani', 'Mohammed', '0667788990', 'mohammed.ziani@email.com', 'password_hash_15', '1986-11-19', '2024-12-21', 'client'),
('El Idrissi', 'Fadoua', '0678899001', 'fadoua.idrissi@email.com', 'password_hash_16', '1989-10-25', '2024-12-21', 'avocat'),
('Salah', 'Omar', '0689900112', 'omar.salah@email.com', 'password_hash_17', '1993-12-15', '2024-12-21', 'client'),
('Benkirane', 'Nadia', '0690011223', 'nadia.benkirane@email.com', 'password_hash_18', '1982-03-18', '2024-12-21', 'avocat'),
('Naciri', 'Anas', '0611222333', 'anas.naciri@email.com', 'password_hash_19', '1990-05-27', '2024-12-21', 'client'),
('Tazi', 'Rania', '0622333444', 'rania.tazi@email.com', 'password_hash_20', '1991-04-05', '2024-12-21', 'avocat');


INSERT INTO info_supp (specialite, experience, id_client) VALUES
('Droit des assurances', 10, 2),
('Droit commercial, des affaires et de la concurrence', 8, 4),
('Droit pénal', 12, 6),
('Droit de la famille, des personnes et de leur patrimoine', 5, 8),
('Droit des sociétés', 7, 10),
('Droit de la protection des données personnelles', 9, 12),
('Droit public', 6, 14),
('Droit immobilier', 11, 16),
('Droit de la santé', 4, 18),
('Droit du travail', 8, 20);

INSERT INTO rdv (statut, id_avocat, id_client) VALUES
('Confirmer', 2, 1),
('Annuler', 4, 3),
('En attend', 6, 5),
('Confirmer', 8, 7),
('Annuler', 10, 9); 


INSERT INTO disponible (debut, fin, id_avocat) VALUES
('2024-12-22 09:00:00', '2024-12-22 12:00:00', 2),
('2024-12-23 14:00:00', '2024-12-23 17:00:00', 4),
('2024-12-24 10:00:00', '2024-12-24 13:00:00', 6),
('2024-12-25 13:00:00', '2024-12-25 16:00:00', 8),
('2024-12-26 08:00:00', '2024-12-26 11:00:00', 10);


ALTER TABLE users ADD COLUMN roles ENUM('avocat', 'client');