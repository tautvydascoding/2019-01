-- komentaras--
-- MYSQL serveris saugo duomenu bazas ir jame jos veikia--
-- duomenu bazes valdomos SQL kalba--
-- tratata - spaltazodis
-- username - pas kai kuriuos negali tureti skaiciu!!!
CREATE USER 'vitasido'@'localhost' IDENTIFIED BY 'mokausisql';
ALTER USER 'vitasido'@'localhost' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON * . * TO 'vitasido'@'localhost' WITH GRANT OPTION;

CREATE DATABASE hospital2;

CREATE TABLE doctors(
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        lname  VARCHAR(30)
);

INSERT INTO doctors VALUES (NULL, 'Tim', 'Logan');
INSERT INTO doctors VALUES (NULL, 'Paul', 'Leo');
INSERT INTO doctors VALUES (NULL, 'Ona', 'Onute');
INSERT INTO doctors VALUES (NULL, 'Lita', 'Orato');
INSERT INTO doctors VALUES (NULL, 'Coris', 'Pita');
SELECT * FROM  doctors;

CREATE TABLE patients (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   name varchar(25),
   lname varchar(30),
   doctor_id INT(6)
);

INSERT INTO patients VALUES (NULL, 'Mark', 'John', 2);
INSERT INTO patients VALUES (NULL, 'Tom', 'Carlos',  2);
INSERT INTO patients VALUES (NULL, 'Aris', 'Tido', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Carlos', 3);
INSERT INTO patients VALUES (NULL, 'Co', 'John', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Naro', 5);
INSERT INTO patients VALUES (NULL, 'Jili', 'Jato', 4);
SELECT * FROM  patients;

CREATE TABLE images (
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        patients_id  VARCHAR(30)
        );

INSERT INTO images VALUES (NULL, 'foto.jpg', 3);
INSERT INTO images VALUES (NULL, '1.jpg',  1);
INSERT INTO images VALUES (NULL, '3.png', 1);
INSERT INTO images VALUES (NULL, '8.gif', 1);
INSERT INTO images VALUES (NULL, 'fo.jpg', 4);
SELECT * FROM  images;

        INSERT INTO images VALUES (NULL, 'Mark', 'John', 2);


        UPDATE doctors
        SET lname = "Litaite"
        WHERE id = 4
        LIMIT 1;

        UPDATE patients
        SET lname = "Karlito"
        WHERE id = 4   AND  name = "Tom"
        LIMIT 1;

        SELECT *
        FROM doctors
        ORDER BY lname;

        SELECT *
        FROM doctors
        WHERE id < 3;

        SELECT *
        FROM doctors
        WHERE lname Like "L%";

        -- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
        SELECT *
        FROM doctors
        WHERE id > 3;

        -- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

        SELECT *
        FROM doctors
        WHERE name = 'Tim'   OR  lname = "Leo";


        -- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
        SELECT *
        FROM doctors
        WHERE id < 4;


        -- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'

        SELECT *
        FROM doctors
        WHERE NOT name = "Ona";
        -- arba WHERE name != "Ona";


        -- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
        SELECT *
        FROM patients
        ORDER BY name;


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

        -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)

        UPDATE doctors
        SET lname = "Paulaitis"
        WHERE id = 5 AND lname = "Makalas";
        LIMIT 1;

        -- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides

        SELECT *
        FROM doctors
        WHERE lname Like "L%";
        
