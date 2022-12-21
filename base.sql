
CREATE DATABASE immo;

CREATE TABLE users (idUser SERIAL PRIMARY KEY, pseudo VARCHAR(100), email VARCHAR(100), mdp VARCHAR(50), user_type SMALLINT);

CREATE SEQUENCE userseq;

SELECT SETVAL('userseq', 1);

SELECT NEXTVAL('userseq');

INSERT INTO USER VALUES (1, 'Admin', 'admin@gmail.com', 'root', 1);

