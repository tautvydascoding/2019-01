 CREATE USER 'tautvydas11'@'localhost' IDENTIFIED BY 'tratata'  PASSWORD EXPIRE NEVER;
 ALTER USER 'tautvydas11'@'localhost' PASSWORD EXPIRE NEVER;
 GRANT ALL PRIVILEGES ON * . * TO 'tautvydas11'@'localhost' WITH GRANT OPTION;

 CREATE DATABASE hospital;
 --DB pasirinkimas
 use hospital;

 CREATE TABLE doctors (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name varchar(23),
     lname varchar(30)
     );

-- parodymas
    show tables

    INSERT INTO doctors VALUES (null,'Tim','Logan');
    INSERT INTO doctors VALUES (null,'Paul','Leo');
    INSERT INTO doctors VALUES (null,'Ona','Onute');
    INSERT INTO doctors VALUES (null,'Lita','Orata');
    INSERT INTO doctors VALUES (null,'Koris','Pita');
    select * from doctors;

CREATE TABLE patients (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name varchar(23),
     lname varchar(30),
     doctors_id INT
     );

    INSERT INTO patients VALUES (null,'Mark','John', 2);
    INSERT INTO patients VALUES (null,'Tom','Karlos', 2);
    INSERT INTO patients VALUES (null,'Aris','Tido', 1);
    INSERT INTO patients VALUES (null,'Tom','Karlos', 3);
    INSERT INTO patients VALUES (null,'Co','John', 1);

CREATE TABLE images (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name varchar(23),
     patients_id INT
     );

    INSERT INTO images VALUES (null,'foto.jpg', 3);
    INSERT INTO images VALUES (null,'3.jpg', 1);
    INSERT INTO images VALUES (null,'1.png', 1);
    INSERT INTO images VALUES (null,'8.gif', 1);
    INSERT INTO images VALUES (null,'fo.jpg', 4);

    UPDATE doctors
    SET lname = "Litaite"
    WHERE id = 4;
    LIMIT 1;

    UPDATE patients
    SET lname = "Karlito"
    WHERE id = 4;

    UPDATE images
    SET patients_id = 5
    WHERE id = 3;

    DELETE FROM images WHERE name ="fo.jpg";

    SELECT name FROM doctors
    ORDER BY name ASC;

    SELECT name FROM doctors
    WHERE id < 3;

    SELECT name FROM doctors
    WHERE name LIKE 'L%';

    DELETE FROM doctors WHERE name = "Koris";

