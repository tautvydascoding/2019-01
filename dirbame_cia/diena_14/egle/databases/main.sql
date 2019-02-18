--MySQL serveris : jame saugomos ir veikia DB
--MySQL gali tureti daugybe vartotoju/accounts/ users
--skirtingi vartotojai turi skirtingas teises.
-- Pagal nutylejima galingiausias vardu "root"
--DB valdomos -SQL kalba
--DB skirta duomenims laikyti(kaip pvz excel)
--DB nemokamos - pirkdami hosting'o paslauga gaunaate kiek tik norite DB (nes jie uzima maziausiai vietos)
--viena DB gali tureti daug lneteliu (pvz, kaip excel sheets)
--komentaras

-- tratata - spaltazodis
-- username - pas kai kuriuos negali tureti skaiciu!!!
-- CREATE USER 'egle'@'localhost' IDENTIFIED BY 'kitakyushu'  --PASSWORD EXPIRE NEVER;
-- ALTER USER 'egle'@'localhost' PASSWORD EXPIRE NEVER;
-- GRANT ALL PRIVILEGES ON * . * TO 'egle'@'localhost' WITH GRANT OPTION;

CREATE DATABASE hospital2;  -- sukuria DATABASE
show databases; -- patirkina kokios yra sukurtos databases

    UPDATE doctors
    ->   SET lname = Litaite
    ->   where id = 5 AND name= Lita
    ->   LIMIT 1;

    CREATE TABLE images(
   ->      id INT AUTO_INCREMENT PRIMARY KEY,
   ->      name VARCHAR(30) not NULL,
   ->      patient_id VARCHAR(30) not NULL
   ->    );

    INSERT INTO images VALUES (NULL, 'foto.jpg', 3);

    INSERT INTO doctors VALUES (NULL, 'Lita', 'Orota');

    CREATE TABLE doctors (
       ->       id INT  AUTO_INCREMENT PRIMARY KEY,
       ->       name VARCHAR(30) not NULL,
       ->       lname VARCHAR(30) NOT NULL
       ->   );


       CREATE TABLE patients(
   ->      id INT  AUTO_INCREMENT PRIMARY KEY,
   ->      name VARCHAR(30) not NULL,
   ->      lname VARCHAR(30) NOT NULL,
   ->      doctors_id INT
   ->    );

   DELETE FROM lname WHERE lname='Carlos';


-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja

    SELECT FROM doctors
      WHERE id IN (4 AND 5);


-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

  SELECT * FROM doctors
  WHERE name LIKE 'Tim' OR (lname LIKE 'Leo');


-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
  SELECT * FROM doctors
    WHERE id<4;


-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
  SELECT * FROM doctors
    where name NOT IN('Ona');

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
  SELECT * FROM patients
    ORDER BY name;


-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'





-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
