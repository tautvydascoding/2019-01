-- komentaras

-- MYSQL serveris: jame saugomos ir veikia duomenu bazes;
-- DB valdomos SQL kalba;
-- DB skirta duomenims laikyti;
-- viena DB gali turėti daug lentelių, pvz kaip excelis daug sheetu;
-- MySQL gali tureti daugybe vartotoju arba accountu / users;
-- vartotojai gali tureti skirtingas teises/privilegijas;
-- pagal nutylejima galingiausias vardu "root";

-- DB nemokamos, pirkdami hostingo paslaugas gaunate kiek tik norite DB (nes jos labai mazai vietos uzima);


CREATE USER 'justess22'@'localhost' IDENTIFIED BY 'pass4ysql';
ALTER USER 'justess22'@'localhost' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON * . * TO 'justess22'@'localhost' WITH GRANT OPTION;
-- user justess22, pws: pass4ysql;


-- susikuriam nauja DB ir nukopinam eilute i console mysql.exe
CREATE DATABASE hospital2;
-- DB pasirinkimas
use hospital2;
-- pasitikrinimui:
show databases;

-- kuriame pirma lentele.
-- AUTO_INCREMENT KEY apsaugo, kad nesukurtum antro ID tokio pat, automatiskai didina ID skaiciu, kaip ID++
-- PRIMARY KEY - unikali reiksme.
CREATE TABLE doctors (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name varchar(30),
   lname varchar(30)
   );
show tables;

SELECT * FROM doctors; -- rodo, kad tuscia;

--duomenu idejimas i lentele:
INSERT INTO doctors VALUES (null, "Tim", "Logan"); --null yra ID numeris, ji turi priskirt automatiskai;
INSERT INTO doctors VALUES (null, "Paul", "Leo");
INSERT INTO doctors VALUES (null, "Ona", "Onute");
INSERT INTO doctors VALUES (null, "Lita", "Orota");
INSERT INTO doctors VALUES (null, "Koris", "Pita");

SELECT * FROM doctors; -- jau uzpildyta duomenimis;

-- kuriame kita lentele:
CREATE TABLE patients (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name varchar(30),
   lname varchar(30),
   doctor_id INT
   );
show tables;

--duomenu idejimas i lentele:
INSERT INTO patients VALUES (null, "Mark", "John", 2);
INSERT INTO patients VALUES (null, "Tom", "Karlos", 2);
INSERT INTO patients VALUES (null, "Aris", "Tido", 1);
INSERT INTO patients VALUES (null, "Tom", "Karlos", 3);
INSERT INTO patients VALUES (null, "Co", "John", 1);
INSERT INTO patients VALUES (null, "Tom", "Naro", 5);
INSERT INTO patients VALUES (null, "Jili", "Jato", 4);

SELECT * FROM patients; -- jau uzpildyta duomenimis;

-- kuriame kita lentele:
CREATE TABLE images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name varchar(30),
  patients_id INT
);
show tables;

--duomenu idejimas i lentele:
INSERT INTO images VALUES (null, "foto.jpg", 3);
INSERT INTO images VALUES (null, "3.jpg", 1);
INSERT INTO images VALUES (null, "1.png", 1);
INSERT INTO images VALUES (null, "8.gif", 1);
INSERT INTO images VALUES (null, "fi.jpg", 4);

SELECT * FROM images;

-- keiciame/taisome duomenis:

UPDATE doctors
    SET lname = "Litaitė" -- LT raides veikia, nes mysql.exe properties ideta UTF8 kodas
    WHERE id = 4 AND name = "Lita" --AND name = "Lita" yra papildoma apsauga, jos gali ir nebuti
    LIMIT 1; -- pakeis tik viena karta.

UPDATE patients
    SET lname = "Karlito"
    WHERE id = 4
    LIMIT 1;


-- eilutes istrinimas is lenteles (triname nuotrauka):
DELETE FROM images
    WHERE id = 5;


-- UZDUOTIS:
-- isvesti surikiuotus gydytojus pagal pavarde.

SELECT * FROM doctors
ORDER BY lname ASC;

-- isvesti gydytojus, kuriu ID maziau uz 3;

SELECT * FROM doctors WHERE id<3;

-- isvesti gydytojus, kuriu pavarde is L raides;

SELECT * FROM doctors WHERE lname LIKE "l%";

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja

SELECT * FROM doctors WHERE id = 4 OR id = 5;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

SELECT * FROM doctors WHERE name = "Tim" OR lname = "Leo";

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4

SELECT * FROM doctors WHERE id < 4;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'

SELECT * FROM doctors WHERE name <> "Ona";

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda

SELECT * FROM patients
ORDER BY name ASC;

-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'

UPDATE doctors
    SET name = "Litas"
    WHERE id = 4
    LIMIT 1;

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)

UPDATE doctors
    SET lname = "Makalas"
    WHERE id = 5
    LIMIT 1;

UPDATE doctors
    SET name = "Koris"
    WHERE id = 5
    LIMIT 1;

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)

UPDATE doctors
    SET lname = "Paulaitis"
    WHERE id = 5 AND lname = "Makalas"
    LIMIT 1;

-- uzduotis 1: istrinti gydytoja "Koris"

DELETE FROM doctors WHERE id = 5;

-- uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"

UPDATE patients
    SET name = "Karolis"
    WHERE id = 5
    LIMIT 1;

-- uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

UPDATE patients
    SET name = "Tomas"
    WHERE name = "Tom";

-- uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"

UPDATE patients
    SET doctor_id = 4
    WHERE name LIKE "T%";

-- uzduotis 4: gauti paciento "Mark" daktaro pavarde. (inner join arba gudrus selectorius)
-- NEISSPRENDZIAU
SELECT patients.doctor_id, doctors.lname
    FROM patients.name WHERE name = "Mark"
    INNER JOIN doctors ON patients.doctor_id = doctors.id;
