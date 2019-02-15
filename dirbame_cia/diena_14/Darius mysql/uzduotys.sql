SELECT name FROM doctors
WHERE id = 4 AND id = 5;

SELECT * FROM doctors
WHERE name = "Tim" OR lname = "Leo";

SELECT name FROM doctors
WHERE id < 4;

SELECT name FROM doctors
WHERE NOT name = "Ona";

SELECT name FROM patients
ORDER BY name ASC;

UPDATE doctors 
SET name = "Lita"
WHERE id = 4;
LIMIT = 1;

UPDATE doctors 
SET name = "Koris"
WHERE id = 5;
LIMIT = 1;

UPDATE doctors 
SET name = "Paulaitis"
WHERE id = 3 AND lname = "Onute";
LIMIT = 1;

SELECT lname LIKE 'L%' FROM doctors;

UPDATE patients
SET name ="Karolis"
WHERE name = "Co"
LIMIT 1;


