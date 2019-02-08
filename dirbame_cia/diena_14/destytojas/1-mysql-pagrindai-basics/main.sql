-- MYSQL serveris: jame saugomos ir veikai DB7
-- MYSQL gali tureti tureti daugybe vartotoju/ACC/ users
-- vartotojai/ACC turi skirtingas teises/privilegijas
-- pagal nutylejima galingiausias vardu "root"

-- DB valdomos - SQL kalba
-- DB - skirta duomenims laikyti (pvz excel)
-- viena DB gali tureti daug lenteliu (pvz kaip exel sheets)



-- DB nemokamos - pirkdami HOST paslauga gaunate kiek tik norite DB (nes jos mazai vietos uzema)
CREATE USER 'tautvydas'@'localhost' IDENTIFIED BY 'tratata' ;
ALTER USER 'tautvydas'@'localhost' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON * . * TO 'tautvydas'@'localhost' WITH GRANT OPTION;


CREATE DATABASE hospital2;
-- DB pasirinkimas
use hospital2;
-- pasitikrinimui
show databases;
-- /



-- AUTO_INCREMENT   id++;
-- PRIMARY KEY - unikali reiksme -negalesime kito kokio pat sukurti
CREATE TABLE doctors (
   id   INT AUTO_INCREMENT PRIMARY KEY,
   name varchar(30),
   lname varchar(30)
   );
-- test
show tables;


INSERT INTO doctors VALUES ('', 'Tim', 'Logan');
-- test
SELECT * FROM doctors;
INSERT INTO doctors VALUES (NULL, 'Paul', 'Leo');
INSERT INTO doctors VALUES (NULL, 'Ona', 'Onute');
INSERT INTO doctors VALUES (NULL, 'Lita', 'Ora');
INSERT INTO doctors VALUES (NULL, 'Koris', 'Pita');
SELECT * FROM doctors;


CREATE TABLE patients (
   id   INT AUTO_INCREMENT PRIMARY KEY,
   name varchar(30),
   lname varchar(30),
   doctor_id INT
   );
-- test
show tables;

INSERT INTO patients VALUES( NULL, "Mark", "John", 2);
-- test
SELECT * FROM patients;
INSERT INTO patients VALUES( NULL, "Tom", "Karlors", 2);
INSERT INTO patients VALUES( NULL, "Aris", "Tido", 2);
INSERT INTO patients VALUES( NULL, "Tom", "Karlos", 1);
INSERT INTO patients VALUES( NULL, "Co", "John", 3);
INSERT INTO patients VALUES( NULL, "Tom", "Naro", 1);
INSERT INTO patients VALUES( NULL, "Jili", "Jato", 5);
SELECT * FROM patients;

-- istrinimas eilutes
DELETE FROM images
       WHERE id = 5;
UPDATE doctors
       SET lname = "litaitė"
       WHERE id = 5 AND name = "Lita"
       LIMIT 1;

UPDATE patients
       SET lname = "Karlito"
       WHERE id = 4 AND lname = "Karlos"
       LIMIT 1;

-- uzduotis:
-- 0. istrinti paskutine nuotrauka
-- 0. Pakeisti Litos pavarde i Litaitė
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
-- 3. ISVESTI GYTYTOJUS kuriu pavarde is raides "L"

SELECT * from doctors
         ORDER BY lname ASC;
-- 2
SELECT * FROM doctors
         WHERE id < 3;
-- 3
SELECT * FROM doctors
         WHERE lname Like "L%";
