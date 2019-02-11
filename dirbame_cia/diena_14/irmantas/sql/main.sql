--sukurti DB
CREATE DATABASE hospital2;
--DB pasirinkimas
use hospital2;
--patikrinti ar sukuriau
show databases;
--sukurti lenteles
-- CREATE TABLE table_name (
--     column1 datatype,
--     column2 datatype,
--     column3 datatype,
--    ....
-- ); datatype w3school;
-- AUTO_INCREMENT PRIMARY KEY prie ID naudot
CREATE TABLE doctors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name varchar(30),
  lastname varchar(30)
);
--parodyti lentele
show tables;

INSERT INTO doctors VALUES(NULL,"Timas","Logan");
SELECT * FROM doctors;

INSERT INTO doctors VALUES(NULL,"Paulius","Labanauskas");
INSERT INTO doctors VALUES(NULL,"Ona","Onute");
INSERT INTO doctors VALUES(NULL,"Lita","Litute");
INSERT INTO doctors VALUES(NULL,"Karolis","Vaznaitis");


CREATE TABLE patients (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name varchar(30),
  lastname varchar(30),
  doctor_id INT
);

show tables;



INSERT INTO patients VALUES(NULL, "MARK","MARKOVAS", 2);
INSERT INTO patients VALUES(NULL, "Tomas", "Tomisijus", 2);
INSERT INTO patients VALUES(NULL, "Auris", "Aurelijus", 1);

INSERT INTO patients VALUES(NULL, "Tomas", "Sernas", 3);
INSERT INTO patients VALUES(NULL, "Co", "Copartas", 1);
INSERT INTO patients VALUES(NULL, "Tomas", "Populiarus", 5);
INSERT INTO patients VALUES(NULL, "Jili", "Jachta", 4);

CREATE TABLE images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name varchar(30),
  patients_id INT
);

INSERT INTO images VALUES(NULL, "foto.jpg", 3);
INSERT INTO images VALUES(NULL, "3.jpg", 1);
INSERT INTO images VALUES(NULL,"1.png", 1);
INSERT INTO images VALUES(NULL, "8.gif", 1);
INSERT INTO images VALUES(NULL,"fo.jpg", 4);




UPDATE doctors
SET lastname="Litaitė"
WHERE id=4;

UPDATE patients SET lastname="Karlito" WHERE id= 4 ;
UPDATE images SET patients_id=5 WHERE id= 3 LIMIT 1;
DELETE FROM images WHERE id= 5 LIMIT 1;
-- uzduotis
--isvesti surikiuotus gydytojus pagal pavarde;

SELECT lastname, name
FROM doctors
ORDER BY lastname, name ASC;

SELECT *
FROM doctors
WHERE id<3;

SELECT * FROM doctors WHERE lastname LIKE "L%";

SELECT * FROM doctors WHERE id>3 ;

SELECT * FROM doctors WHERE name != "Ona" ;

SELECT * FROM doctors WHERE name = "Timas" OR lastname = "Leo" ;

SELECT * FROM doctors WHERE id=4 OR id=5;

SELECT * FROM patients ORDER BY name, lastname ASC;

UPDATE doctors SET name="Litas" WHERE id= 4;








--
