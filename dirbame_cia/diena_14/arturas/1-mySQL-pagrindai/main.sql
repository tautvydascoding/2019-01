-- komentras
CREATE USER 'arturas'@'localhost' IDENTIFIED BY 'slaptazodis'  PASSWORD EXPIRE NEVER;
ALTER USER 'arturas'@'localhost' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON * . * TO 'arturas'@'localhost' WITH GRANT OPTION;

CREATE DATABASE hospital2;
USE hospital2;

CREATE TABLE doctors (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name varchar(30),
   lname varchar(30)
   );
INSERT INTO doctors VALUES (NULL, 'Tim', 'Logan');
INSERT INTO doctors VALUES (NULL, 'Paul', 'Leo');
INSERT INTO doctors VALUES (NULL, 'Ona', 'Onute');
INSERT INTO doctors VALUES (NULL, 'Lita', 'Orota');
INSERT INTO doctors VALUES (NULL, 'Koris', 'Pita');

CREATE TABLE patients (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name varchar(30),
   lname varchar(30),
   doctors_id INT
   );
INSERT INTO patients VALUES (NULL, 'Mark', 'John', 2);
INSERT INTO patients VALUES (NULL, 'Tom', 'Karlos', 2);
INSERT INTO patients VALUES (NULL, 'Aris', 'Tirlo', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Karlos', 3);
INSERT INTO patients VALUES (NULL, 'Co', 'John', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Naro', 5);
INSERT INTO patients VALUES (NULL, 'Jili', 'Jato', 4);

CREATE TABLE images (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name varchar(30),
   patients_id INT
   );
INSERT INTO images VALUES (NULL, 'foto.jpg', 3);
INSERT INTO images VALUES (NULL, '3.jpg', 1);
INSERT INTO images VALUES (NULL, '1.png', 1);
INSERT INTO images VALUES (NULL, '8.gif', 1);
INSERT INTO images VALUES (NULL, 'fo.jpg', 4);

UPDATE doctors SET lname = "Litaitė" WHERE id = 4;
UPDATE patients SET lname = "Karlito" WHERE id = 4;
UPDATE images SET patients_id = 5 WHERE id = 3;
DELETE FROM images WHERE id = 5;

-- isvesti surikiuotus gydytojus pagal pavarde
SELECT id, name, lname FROM doctors ORDER BY lname ASC;
-- isvesti gydytojus kuriu id mazesnis uz 3
SELECT id, name, lname FROM doctors WHERE id < 3;
-- pavarde is raides "L"
SELECT lname FROM doctors WHERE lname LIKE 'L%';
-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors WHERE id = 4 OR id = 5;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors WHERE name = "Tim" OR lname = "Leo";
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors WHERE id < 4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors WHERE NOT name = "Ona";
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM doctors ORDER BY name ASC;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors SET name = "Litas" WHERE id = 4 LIMIT 1;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors SET lname = "Makalas" WHERE id = 5;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE doctors SET lname = "Paulaitis" WHERE id = 5 AND lname = "Makalas";
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM doctors WHERE lname LIKE 'L%';
-- // uzduotis 1: istrinti gydytoja "Koris"
DELETE FROM doctors WHERE name = "Koris";
-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
UPDATE patients SET name = "Karolis" WHERE name = "Co" LIMIT 1;
-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients SET name = "Tomas" WHERE name = "Tom";
-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients SET doctors_id = 4 WHERE name LIKE "T%";
-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT lname FROM doctors WHERE id IN (SELECT doctors_id FROM patients WHERE name = "Mark");
-- SELECT doctors.lname
--   FROM doctors
--   INNER JOIN patients WHERE name = "Mark" ON id.doctors = doctors_id.patients;
