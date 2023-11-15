-- CREATE DATABASE DataWare CHARACTER SET utf8 COLLATE utf8_general_ci;


-- CREATE TABLE equipe (
--     id int NOT NULL AUTO_INCREMENT,
--     nom varchar(30) NOT NULL,
--     dateDeCreation DATE ,
--        PRIMARY KEY (id)
-- )

-- CREATE TABLE membre (
--      id int NOT NULL AUTO_INCREMENT,
--      nom varchar(30) NOT NULL,
--      prenom varchar(30) NOT NULL,
--      email varchar(50) NOT NULL,
--      num varchar(30) NOT NULL,
--     rol varchar(30) NOT NULL,
--     stt varchar(30) NOT NULL,
--     equipe_id int NOT NULL
    
--         PRIMARY KEY (id)
--         FOREIGN KEY (equipe_id) REFERENCES equipe (id)
-- )


-- INSERT INTO membre (nom, prenom, email, num, rol, stt, equipe_id)
-- VALUES ("el alaoui", "ahmed", "alaoui@gmail.com", "0634434345", "scrumMaster", "admin", 1);


-- INSERT INTO `equipe` (`id`, `nom`, `dateDeCreation`) VALUES (NULL, 'dfd', '2023-11-28');